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
        'update'    => 'SubjectGroupingEntries(Id={Id})',
        'delete'    => 'SubjectGroupingEntries(Id={Id})',
        'create'    => 'SubjectGroupingEntries',
        'all'       => 'SubjectGroupingEntries',
    ];

}