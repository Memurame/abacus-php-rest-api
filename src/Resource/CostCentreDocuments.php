<?php

/**
 * @package Abacus PHP REST API
 * @author Thomas Hirter <memurame@tekomail.ch>
 */

namespace AbacusAPIClient\Resource;

use AbacusAPIClient\ResourceType;

class CostCentreDocuments extends AbstractResource
{
    const URLS = [
        'get'       => 'CostCentreDocuments(Id={Id})',
        'update'    => 'CostCentreDocuments(Id={Id})',
        'delete'    => 'CostCentreDocuments(Id={Id})',
        'create'    => 'CostCentreDocuments',
        'all'       => 'CostCentreDocuments',

    ];   
    
}