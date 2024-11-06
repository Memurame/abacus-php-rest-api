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
// Get Address by ID
//

$address = $client->resource(ResourceType::ADDRESSES)->id('0bfc02c0-e9ed-e201-175a-c2d220524153')->run();
print("<pre>".print_r($address->getValues(),true)."</pre>");


//
// Get Subject of Address by ID of Subject
//
$subjects = $client->resource(ResourceType::SUBJECTS)->id($address->getValue('SubjectId')->expand('communications'));
print("<pre>".print_r($subjects->getValues(),true)."</pre>");