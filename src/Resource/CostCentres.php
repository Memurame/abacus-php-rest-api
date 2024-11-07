<?php

/**
 * @package Abacus PHP REST API
 * @author Thomas Hirter <memurame@tekomail.ch>
 */

namespace AbacusAPIClient\Resource;

use AbacusAPIClient\ResourceType;

class CostCentres extends AbstractResource
{
    const URLS = [
        'get'       => 'CostCentres(Id={Id},EnterpriseId={EnterpriseId})',
        'delete'    => 'CostCentres(Id={Id},EnterpriseId={EnterpriseId})',
        'create'    => 'CostCentres',
        'all'       => 'CostCentres',

    ];   
    
}