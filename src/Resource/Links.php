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
        'all'       => 'Links',
        'delete'    => 'Links(Id={Id})',
    ];

}