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


/**
 *      Search with filter
 *      ##################
 *
 *      Typ
 *      - ch.abacus.adre.CommunicationType'EMail
 *      - ch.abacus.adre.CommunicationType'Phone'
 *      - ch.abacus.adre.CommunicationType'Mobile'
 */

$com = $client->resource(ResourceType::COMMUNICATIONS)
    ->filter('Type', 'eq', "ch.abacus.adre.CommunicationType'EMail'")
    ->filter('Value', 'eq', "amrein@abacusmustermandant.ch")
    ->run();

print("<pre>".print_r($com->getValues(),true)."</pre>");


/**
 *      Get all
 *      ##################
 */

$com = $client->resource(ResourceType::COMMUNICATIONS)->run();

print("<pre>".print_r($com->getValues(),true)."</pre>");