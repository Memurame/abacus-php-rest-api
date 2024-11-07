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
    const ACCOUNTDOCUMENTS        = '\\AbacusAPIClient\\Resource\\AccountDocuments';
    const ACCOUNTS                = '\\AbacusAPIClient\\Resource\\Accounts';
    const COSTCENTREDOCUMENTS    = '\\AbacusAPIClient\\Resource\\CostCentreDocuments';
    const COSTCENTRES            = '\\AbacusAPIClient\\Resource\\CostCentres';
    const GENERALLEDGERENTRIES   = '\\AbacusAPIClient\\Resource\\GeneralLedgerEntries';
    const GENERALLEDGERENTRYDOCUMENTS   = '\\AbacusAPIClient\\Resource\\GeneralLedgerEntryDocuments';
    const JOURNALS               = '\\AbacusAPIClient\\Resource\\Journals';
}