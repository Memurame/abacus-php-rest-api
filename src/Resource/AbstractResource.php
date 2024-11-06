<?php

/**
 * @package Abacus PHP REST API
 * @author Thomas Hirter <memurame@tekomail.ch>
 */

namespace AbacusAPIClient\Resource;

use AbacusAPIClient\ResourceType;

abstract class AbstractResource{

    private $client;

    private $remote_data = [];

    private $values = [];

    private $error;

    private $url;

    private $filter;

    private $limit;

    private $order;

    private $select;

    private $expand;

    public function __construct( \AbacusAPIClient\AbacusClient $client )
    {
        $this->client = $client;

    }

    /**
     * Returns the AbacusAPIClient object
     *
     * @return \AbacusAPIClient\AbacusClient
     */
    protected function getClient()
    {
        return $this->client;
    }

    /**
     * Prepares the URL for the request
     *
     * @param $method_name
     * @param array $placeholder_values
     * @return array|mixed|string|string[]|null
     */
    protected function getURL( $method_name, array $placeholder_values = [] )
    {
        if ( !array_key_exists( $method_name, $this::URLS ) ) {
            throw new \RuntimeException(
                "Method '$method_name' is not supported for "
                . get_class($this)
                . ' resource'
            );
        }

        $url = $this::URLS[$method_name];
        foreach ( $placeholder_values as $placeholder => $value ) {
            $url = preg_replace( "/\{$placeholder\}/", "$value", $url );
        }

        return $url;
    }

    public function getID()
    {
        return $this->getValue('Id');
    }

    public function run(){

        $query = [];
        if(!empty($this->filter)){
            $query['$filter'] = $this->filter;
        }
        if(!empty($this->limit)){
            $query['$top'] = $this->limit;
        }
        if(!empty($this->order)){
            $query['$orderBy'] = $this->limit;
        }
        if(!empty($this->expand)){
            $query['$expand'] = $this->expand;
        }
        if(!empty($this->select)){
            $query['$select'] = $this->select;
        }

        if(empty($this->url)){
            $this->url = $this->getURL('all');
        }
        $response = $this->client->getRequest($this->url, $query);

        if ( $response->hasError() ) {
            $this->setError( $response->getError() );
        }
        else {
            $this->clearError();
            $this->setRemoteData( $response->getData() );
        }

        return $this;
    }

    public function filter(string $key, string $operator, string $search){

        $this->filter = implode(" ", [$key, $operator, $search]);

        return $this;
    }

    public function limit(int $limit){
        $this->limit = $limit;

        return $this;
    }

    public function select(string $key){
        $this->select = $key;

        return $this;
    }

    public function order(string $key, string $direction){
        $this->order = implode(" ", [$key, $direction]);

        return $this;
    }

    public function expand(string $resource){
        $this->expand = $resource;

        return $this;
    }

    public function id(string $id){

        $this->url = $this->getURL('get', ['Id' => $id]);

        return $this;
    }

    public function save()
    {
        if ( empty( $this->getID() ) ) {
            return $this->create();
        }

        return $this->update();
    }

    public function update(){
        $url = $this->getURL('update', ['Id' => $this->getID()]);

        $response = $this->client->patchRequest($url, $this->getValues());

        if ( $response->hasError() ) {
            $this->setError( $response->getError() );
        }
        else {
            $this->clearError();
        }

        return $this;
    }

    public function create(){
        $url = $this->getURL('create');

        $response = $this->client->postRequest($url, $this->getValues());

        if ( $response->hasError() ) {
            $this->setError( $response->getError() );
        }
        else {
            $this->clearError();
        }

        return $this;
    }

    public function delete(string $id){
        $url = $this->getURL('delete', ['Id' => $id]);

        $response = $this->client->deleteRequest($url);

        if ( $response->hasError() ) {
            $this->setError( $response->getError() );
        }
        else {
            $this->clearError();
        }

        return $response;
    }

    protected function setRemoteData( array $data = [] )
    {
        $this->remote_data = $data;
        return $this;
    }

    public function getRemoteData()
    {
        return $this->remote_data;
    }

    public function getValues()
    {
        $remote_data = $this->remote_data;
        if(is_array($this->remote_data) && array_key_exists('value', $this->remote_data)){
            $remote_data = $this->remote_data['value'];
        } 

        $values = array_merge($remote_data, $this->values);
        return $values;
    }

    public function getValue($key)
    {
        if ( array_key_exists( $key, $this->values ) ) {
            return $this->values[$key];
        }
        
        if ( array_key_exists( $key, $this->remote_data ) ) {
            return $this->remote_data[$key];
        }

        return null;
    }

    public function setValues( array $values )
    {
        if(empty($this->values)){
            $this->values = $this->getValues();
        }
        $this->values = array_merge( $this->values, $values );
        return $this;
    }

    public function setValue( $key, $value )
    {
        if(empty($this->values)){
            $this->values = $this->getValues();
        }

        $this->values[$key] = $value;
        return $this;
    }

    protected function setError( $error )
    {
        $this->error = $error;
        return $this;
    }

    public function getError()
    {
        return $this->error;
    }

    public function hasError()
    {
        return !empty( $this->getError() );
    }

    protected function clearError()
    {
        $this->error = null;
        return $this;
    }
}