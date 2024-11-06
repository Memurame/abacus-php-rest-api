<?php

/**
 * @package Abacus PHP REST API
 * @author Thomas Hirter <memurame@tekomail.ch>
 */

namespace AbacusAPIClient\Resource;

class Communications extends AbstractResource
{
    const URLS = [
        'get'       => 'Communications(Id={Id})',
        'update'    => 'Communications(Id={Id})',
        'delete'    => 'Communications(Id={Id})',
        'create'    => 'Communications',
        'all'       => 'Communications',
    ];

}