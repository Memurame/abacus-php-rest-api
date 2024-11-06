<?php

/**
 * @package Abacus PHP REST API
 * @author Thomas Hirter <memurame@tekomail.ch>
 */

namespace AbacusAPIClient\Resource;

use AbacusAPIClient\ResourceType;

class Addresses extends AbstractResource
{
    const URLS = [
        'get'       => 'Addresses(Id={Id})',
        'update'    => 'Addresses(Id={Id})',
        'delete'    => 'Addresses(Id={Id})',
        'create'    => 'Addresses',
        'all'       => 'Addresses',

    ];   
    
}