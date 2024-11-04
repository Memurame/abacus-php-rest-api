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
        'all'       => 'SubjectGroupings',
        'delete'    => 'SubjectGroupings(Id={Id})',
    ];

}