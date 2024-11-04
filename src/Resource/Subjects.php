<?php

/**
 * @package Abacus PHP REST API
 * @author Thomas Hirter <memurame@tekomail.ch>
 */

namespace AbacusAPIClient\Resource;

class Subjects extends AbstractResource
{
    const URLS = [
        'get'       => 'Subjects(Id={Id})',
        'all'       => 'Subjects',
        'delete'    => 'Subjects(Id={Id})',
    ];

}