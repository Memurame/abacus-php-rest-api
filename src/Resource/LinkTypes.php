<?php

/**
 * @package Abacus PHP REST API
 * @author Thomas Hirter <memurame@tekomail.ch>
 */

namespace AbacusAPIClient\Resource;

class LinkTypes extends AbstractResource
{
    const URLS = [
        'get'       => 'LinkTypes(Id={Id})',
        'update'    => 'LinkTypes(Id={Id})',
        'delete'    => 'LinkTypes(Id={Id})',
        'create'    => 'LinkTypes',
        'all'       => 'LinkTypes',
    ];

}