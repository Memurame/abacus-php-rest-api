<?php

/**
 * @package Abacus PHP REST API
 * @author Thomas Hirter <memurame@tekomail.ch>
 */

namespace AbacusAPIClient\Resource;

class SubjectGroupingEntries extends AbstractResource
{
    const URLS = [
        'get'       => 'SubjectGroupingEntries(Id={Id})',
        'all'       => 'SubjectGroupingEntries',
        'delete'    => 'SubjectGroupingEntries(Id={Id})',
    ];

}