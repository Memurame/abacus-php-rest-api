<?php

/**
 * @package Abacus PHP REST API
 * @author Thomas Hirter <memurame@tekomail.ch>
 */

namespace AbacusAPIClient\Resource;

use AbacusAPIClient\ResourceType;

class GeneralLedgerEntryDocuments extends AbstractResource
{
    const URLS = [
        'get'       => 'GeneralLedgerEntryDocuments(Id={Id})',
        'update'    => 'GeneralLedgerEntryDocuments(Id={Id})',
        'delete'    => 'GeneralLedgerEntryDocuments(Id={Id})',
        'create'    => 'GeneralLedgerEntryDocuments',
        'all'       => 'GeneralLedgerEntryDocuments',

    ];   
    
}