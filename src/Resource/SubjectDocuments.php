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
        'all'       => 'SubjectDocuments',
        'delete'    => 'SubjectDocuments(Id={Id})',
    ];

}