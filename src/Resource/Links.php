<?php

/**
 * @package Abacus PHP REST API
 * @author Thomas Hirter <memurame@tekomail.ch>
 */

namespace AbacusAPIClient\Resource;

class Links extends AbstractResource
{
    const URLS = [
        'get'       => 'Links(Id={Id})',
        'update'    => 'Links(Id={Id})',
        'delete'    => 'Links(Id={Id})',
        'create'    => 'Links',
        'all'       => 'Links',
    ];

}