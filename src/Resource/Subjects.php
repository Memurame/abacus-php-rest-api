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
        'update'    => 'Subjects(Id={Id})',
        'delete'    => 'Subjects(Id={Id})',
        'create'    => 'Subjects',
        'all'       => 'Subjects',
    ];

}