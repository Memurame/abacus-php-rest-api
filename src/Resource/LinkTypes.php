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
        'all'       => 'LinkTypes',
        'delete'    => 'LinkTypes(Id={Id})',
    ];

}