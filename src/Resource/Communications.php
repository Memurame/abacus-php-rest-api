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
        'all'       => 'Communications',
        'delete'    => 'Communications(Id={Id})',
    ];

}