<?php

/**
 * @package Abacus PHP REST API
 * @author Thomas Hirter <memurame@tekomail.ch>
 */

require '../vendor/autoload.php';
require './config.php';

use AbacusAPIClient\AbacusClient;
use AbacusAPIClient\ResourceType;

$client = new AbacusClient($abacus_demo_client_config);


//
// Get all Addresses
//

$addresses = $client->resource(ResourceType::ADDRESSES)->all();

print("<pre>".print_r($addresses,true)."</pre>");

//
// Get Address by ID
//

$address = $client->resource(ResourceType::ADDRESSES)->get($addresses[13]['Id']);

print("<pre>".print_r($address,true)."</pre>");