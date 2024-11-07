# Abacus PHP REST API
This repository addresses the [Abacus REST API](https://apihub.abacus.ch/) and thus simplifies the handling of requests.
This was developed by me for my own purposes.
You are also welcome to use it yourself and help develop it further.

**This repository is still in its infancy.
It will therefore not yet have many functions.**

## Requirements
- PHP 8.3
- Composer
- Abacus API Token

## Install
```
composer require memurame/abacus-php-rest-api
```

## How to use the API client
### Example code
You can find example code within the directory examples.

### The Client object
Your starting point is the AbacusClient object:
```
use AbacusAPIClient\AbacusClient;

$abacusClient = new AbacusClient([
    'base_url'      => 'https://abacus.domain.ch',
    'client_id'     => '',
    'client_secret' => '',
    'mandant'       => '7777'
]);

```

### Fetching all Resource object
To read all objects without filtering:
```php
use AbacusAPIClient\ResourceType;
$addresses = $abacusClient->resource(ResourceType::ADDRESSES)->run();
```

### Fetching a single Resource object
To read a single objects by Id:
```php
use AbacusAPIClient\ResourceType;
$address = $abacusClient->resource(ResourceType::ADDRESSES)->id('02b95ac0-e9ed-e201-175a-c2d220524153')->run();
```

### Query builder
You have the option to include various queries with the request.
You can attach any of these functions to a request.
As an example, I have listed all possible queries for you
```php
use AbacusAPIClient\ResourceType;
$addresses = $abacusClient->resource(ResourceType::ADDRESSES)
    ->filter('SubjectId', 'eq', 8)
    ->limit(3)
    ->order('Id', 'desc')
    ->select('FirstName')
    ->expand('Subject')
    ->run();
```
#### filter
You can search for a key and its value. You can see how the string is structured in the link below
https://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionfilter

#### limit
You can specify how many results you want.
https://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptiontop

#### order
Define which key to sort by and in which direction.
https://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionorderby
#### select
Define which values you want back. The ID is always included.
https://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionselect

#### expand
You can attach related entities here.
https://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionexpand

### Get all Values of the object
To get all available Values of the Address:
```php
$values = $address->getValues();
```
This returns an array of all data.

### Get a single value of the object
Returns a single value based on its key:
```php
$values = $address->getValue('SubjectId');
```
This returns an string.

### Change values
Set a new value for one or more keys.
```php
$address->setValue('City', 'Solothurn');
OR
$address->setValues([
    'City' => 'Solothurn', 
    'PostCode' => 3232
]);
```

### Save changes
Saves the changes made with getValue or getValues.
```php
$address->save();
```

### create new object
```php
use AbacusAPIClient\ResourceType;
$address = $abacusClient->resource(ResourceType::ADDRESSES);
$address->setValues({
    'SubjectId' => 0,
    'Street'    => 'Hausenstrasse',
    ...
    ...
})

$address->save();
```

## Available resource types and their access methods

To be able to use the 'short form' for the resource type, add a
```php
use AbacusAPIClient\ResourceType;
```

to your code. You then can reference the resource type like
```php
$abacusClient->resource( ResourceType::ADDRESSES );
```

| Resource type               | Category | Implemented & tested |
|:----------------------------|:---------|:--------------------:|
| ACCOUNTDOCUMENTS            | Finance  |       &#10004;       |
| ACCOUNTS                    | Finance  |       &#10004;       |
| ADDRESSES                   | CRM      |       &#10004;       |
| COMMUNICATIONS              | CRM      |       &#10004;       |
| COSTCENTREDOCUMENTS         | Finance  |       &#10004;       |
| COSTCENTRES                 | Finance  |       &#10004;       |
| GENERALLEDGERENTRIES        | Finance  |       &#10004;       |
| GENERALLEDGERENTRYDOCUMENTS | Finance  |       &#10004;       |
| JOURNALS                    | Finance  |       &#10004;       |
| LINKDOCUMENTS               | CRM      |       &#10004;       |
| LINKTYPES                   | CRM      |       &#10004;       |
| LINKS                       | CRM      |       &#10004;       |
| SUBJECTDOCUMENTS            | CRM      |       &#10004;       |
| SUBJECTGROUPINGENTRIES      | CRM      |       &#10004;       |
| SUBJECTGROUPINGS            | CRM      |       &#10004;       |
| SUBJECTS                    | CRM      |       &#10004;       |
