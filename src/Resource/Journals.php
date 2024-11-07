<?php

/**
 * @package Abacus PHP REST API
 * @author Thomas Hirter <memurame@tekomail.ch>
 */

namespace AbacusAPIClient\Resource;

use AbacusAPIClient\ResourceType;

class Journals extends AbstractResource
{
    const URLS = [
        'get'       => 'Journals(Id={Id}, EnterpriseId={EnterpriseId})',
        'update'    => 'Journals(Id={Id}, EnterpriseId={EnterpriseId})',
        'delete'    => 'Journals(Id={Id}, EnterpriseId={EnterpriseId})',
        'create'    => 'Journals',
        'all'       => 'Journals',

    ];   
    
}