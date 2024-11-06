<?php

/**
 * @package Abacus PHP REST API
 * @author Thomas Hirter <memurame@tekomail.ch>
 */

require __DIR__ . '/vendor/autoload.php';
require __DIR__ . '/config.php';

use AbacusAPIClient\AbacusClient;
use AbacusAPIClient\ResourceType;

$client = new AbacusClient($abacus_demo_client_config);


//
// Get all Addresses
//

$addresses = $client->resource(ResourceType::ADDRESSES)->run();

print("<pre>".print_r($addresses->getValues(),true)."</pre>");

//
// Get Address by ID
//

$address = $client->resource(ResourceType::ADDRESSES)->id('0bfc02c0-e9ed-e201-175a-c2d220524153')->run();

$address->setValues(['City' => 'Solothurn', 'PostCode' => "3232"]);

$address->save();

print("<pre>".print_r($address->getValues(),true)."</pre>");