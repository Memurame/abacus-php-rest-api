<?php

/**
 * @package Abacus PHP REST API
 * @author Thomas Hirter <memurame@tekomail.ch>
 */

namespace AbacusAPIClient;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use Symfony\Component\Cache\Adapter\FilesystemAdapter;
use AbacusAPIClient\Client\Response;

class AbacusClient
{
    private $client;
    private $token;
    private $cache;
    private $credentials;
    private $last_response;

    public function __construct(array $credentials)
    {
        $this->credentials = $credentials;
        
        $this->client = new Client([
            'base_uri' => $this->credentials['base_url'],
        ]);

        $this->cache = new FilesystemAdapter();

        $this->authenticate();
    }

    private function authenticate()
    {
        $cacheItem = $this->cache->getItem('abacus_token');

        if ($cacheItem->isHit()) {
            $this->token = $cacheItem->get();
            return;
        }

        try {
            $response = $this->client->post('/oauth/oauth2/v1/token', [
                'headers' => [
                    'Authorization' => 'Basic ' . base64_encode($this->credentials['client_id'] . ':' . $this->credentials['client_secret']),
                    'Content-Type' => 'application/x-www-form-urlencoded',
                ],
                'form_params' => [
                    'grant_type' => 'client_credentials',
                ],
            ]);

            $data = json_decode($response->getBody(), true);

            if (isset($data['access_token'])) {
                $this->token = $data['access_token'];
                
                $cacheItem->set($this->token);
                $cacheItem->expiresAfter(600);
                $this->cache->save($cacheItem);
            } else {
                throw new \Exception('No access token in response');
            }
        } catch (RequestException $e) {
            throw new \Exception('Failed to authenticate with Abacus API: ' . $e->getMessage());
        }
    }
    private function request(string $method, string $path, array $params = [])
    {
        $url = '/api/entity/v1/mandants/' . $this->credentials['mandant'] . '/' . $path;

        $request = [
            'headers' => [
                'Authorization' => 'Bearer ' . $this->token,
            ],
            'query' => $params,
        ];

        try {
            $response = $this->client->request($method, $url, $request);

            $body = json_decode($response->getBody(), true);


            $response = new Response(
                $response->getStatusCode(),
                '',
                $response->getBody(),
                $response->getHeaders()
            );

            $this->setLastResponse($response);

            return $response;
        } catch (RequestException $e) {
            throw new \Exception("Failed to retrieve data from Abacus API: " . $e->getMessage());
        }
    }

    public function getRequest(string $path, array $params = []){
        return $this->request('GET', $path, $params);
    }

    public function postRequest(string $path, array $params = []){
        return $this->request('POST', $path, $params);
    }

    public function deleteRequest(string $path, array $params = []){
        return $this->request('DELETE', $path, $params);
    }

    public function hasToken(){
        return ($this->token) ? true : false;
    }

    public function resource($resource_type)
    {
        $resource_object = new $resource_type($this);
        return $resource_object;
    }

    private function setLastResponse( Response $response )
    {
        $this->last_response = $response;
    }

    public function getLastResponse()
    {
        return $this->last_response;
    }
}
