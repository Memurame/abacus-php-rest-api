<?php

/**
 * @package Abacus PHP REST API
 * @author Thomas Hirter <memurame@tekomail.ch>
 */

namespace AbacusAPIClient\Resource;

use AbacusAPIClient\ResourceType;

class Accounts extends AbstractResource
{
    const URLS = array(
        'get'       => 'Accounts(Id={Id},EnterpriseId={EnterpriseId})',
        'delete'    => 'Accounts(Id={Id}, EnterpriseId={EnterpriseId})',
        'create'    => 'Accounts',
        'all'       => 'Accounts',

    );
    
}