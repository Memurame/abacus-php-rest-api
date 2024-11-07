<?php

/**
 * @package Abacus PHP REST API
 * @author Thomas Hirter <memurame@tekomail.ch>
 */

namespace AbacusAPIClient\Resource;

use AbacusAPIClient\ResourceType;

class AccountDocuments extends AbstractResource
{
    const URLS = [
        'get'       => 'AccountDocuments(Id={Id})',
        'update'    => 'AccountDocuments(Id={Id})',
        'delete'    => 'AccountDocuments(Id={Id})',
        'create'    => 'AccountDocuments',
        'all'       => 'AccountDocuments',

    ];   
    
}