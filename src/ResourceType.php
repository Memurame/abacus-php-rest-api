<?php

/**
 * @package Abacus PHP REST API
 * @author Thomas Hirter <memurame@tekomail.ch>
 */

namespace AbacusAPIClient;

class ResourceType
{
    const ADDRESSES               = '\\AbacusAPIClient\\Resource\\Addresses';
    const COMMUNICATIONS          = '\\AbacusAPIClient\\Resource\\Communications';
    const LINKDOCUMENTS           = '\\AbacusAPIClient\\Resource\\LinkDocuments';
    const LINKS                   = '\\AbacusAPIClient\\Resource\\Links';
    const LINKTYPES               = '\\AbacusAPIClient\\Resource\\LinkTypes';
    const SUBJECTDOCUMENTS        = '\\AbacusAPIClient\\Resource\\SubjectDocuments';
    const SUBJECTGROUPINGENTRIES  = '\\AbacusAPIClient\\Resource\\SubjectGroupingEntries';
    const SUBJECTGROUPINGS        = '\\AbacusAPIClient\\Resource\\SubjectGroupings';
    const SUBJECTS                = '\\AbacusAPIClient\\Resource\\Subjects';
}