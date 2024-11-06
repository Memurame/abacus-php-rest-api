<?php

/**
 * @package Abacus PHP REST API
 * @author Thomas Hirter <memurame@tekomail.ch>
 */

namespace AbacusAPIClient\Resource;

class SubjectGroupings extends AbstractResource
{
    const URLS = [
        'get'       => 'SubjectGroupings(Id={Id})',
        'update'    => 'SubjectGroupings(Id={Id})',
        'delete'    => 'SubjectGroupings(Id={Id})',
        'create'    => 'SubjectGroupings',
        'all'       => 'SubjectGroupings',
    ];

}