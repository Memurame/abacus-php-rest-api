<?php

/**
 * @package Abacus PHP REST API
 * @author Thomas Hirter <memurame@tekomail.ch>
 */

use PHPUnit\Framework\TestCase;
use AbacusAPIClient\AbacusClient;
use AbacusAPIClient\ResourceType;
use Dotenv\Dotenv;

class AbacusClientTest extends TestCase
{
    private $client;

    protected function setUp(): void
    {
        // Lade Umgebungsvariablen für die Zugangsdaten
        $dotenv = Dotenv::createImmutable(__DIR__ . '/../');
        $dotenv->load();

        // Initialisiere die AbacusClient-Instanz einmal für alle Tests
        $this->client = new AbacusClient([
            'base_url'      => $_ENV['ABACUS_URL'],
            'client_id'     => $_ENV['ABACUS_CLIENT_ID'],
            'client_secret' => $_ENV['ABACUS_CLIENT_SECRET'],
            'mandant'       => $_ENV['ABACUS_MANDANT']
        ]);
    }

    public function testAuthentication()
    {
        // Überprüfe, ob das Token nach der Authentifizierung gesetzt wurde
        $this->assertNotEmpty($this->client->hasToken(), 'Token should not be empty');
    }

    public function testGetRequest()
    {
        // Teste eine Anfrage an die API und prüfe, ob die Antwort ein Array ist
        $response = $this->client->resource(ResourceType::ADDRESSES)->all();
        $this->assertIsArray($response, 'Response should be an array');
    }
}
