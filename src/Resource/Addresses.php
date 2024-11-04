<?php

/**
 * @package Abacus PHP REST API
 * @author Thomas Hirter <memurame@tekomail.ch>
 */

namespace AbacusAPIClient\Resource;

class Addresses extends AbstractResource
{
    const URLS = [
        'get'       => 'Addresses(Id={Id})',
        'all'       => 'Addresses',
        'delete'    => 'Addresses(Id={Id})',
    ];

}