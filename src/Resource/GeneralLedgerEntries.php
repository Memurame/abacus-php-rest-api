<?php

/**
 * @package Abacus PHP REST API
 * @author Thomas Hirter <memurame@tekomail.ch>
 */

namespace AbacusAPIClient\Resource;

use AbacusAPIClient\ResourceType;

class GeneralLedgerEntries extends AbstractResource
{
    const URLS = [
        'get'       => 'GeneralLedgerEntries(Id={Id})',
        'delete'    => 'GeneralLedgerEntries(Id={Id})',
        'create'    => 'GeneralLedgerEntries',
        'all'       => 'GeneralLedgerEntries',

    ];   
    
}