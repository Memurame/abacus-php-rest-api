<?php

/**
 * @package Abacus PHP REST API
 * @author Thomas Hirter <memurame@tekomail.ch>
 */

namespace AbacusAPIClient\Resource;

class LinkDocuments extends AbstractResource
{
    const URLS = [
        'get'       => 'LinkDocuments(Id={Id})',
        'update'    => 'LinkDocuments(Id={Id})',
        'delete'    => 'LinkDocuments(Id={Id})',
        'create'    => 'LinkDocuments',
        'all'       => 'LinkDocuments',
    ];

}