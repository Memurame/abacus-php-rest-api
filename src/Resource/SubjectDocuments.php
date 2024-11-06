<?php

/**
 * @package Abacus PHP REST API
 * @author Thomas Hirter <memurame@tekomail.ch>
 */

namespace AbacusAPIClient\Resource;

class SubjectDocuments extends AbstractResource
{
    const URLS = [
        'get'       => 'SubjectDocuments(Id={Id})',
        'update'    => 'SubjectDocuments(Id={Id})',
        'delete'    => 'SubjectDocuments(Id={Id})',
        'create'    => 'SubjectDocuments',
        'all'       => 'SubjectDocuments',
    ];

}