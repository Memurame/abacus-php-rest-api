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
$addresses = $abacusClient->resource(ResourceType::ADDRESSES)->all();
```

### Fetching a single Resource object
To read a single objects by Id:
```php
use AbacusAPIClient\ResourceType;
$address = $abacusClient->resource(ResourceType::ADDRESSES)->get('02b95ac0-e9ed-e201-175a-c2d220524153');
```

### Searching by a Key and Value
Searches objects for the specific value in a key and returns it as an array:
```php
use AbacusAPIClient\ResourceType;
$addresses = $abacusClient->resource(ResourceType::ADDRESSES)->search('SubjectId', 'eq', 8);
```
You can find out which search operators can be used in the following link
https://docs.oasis-open.org/odata/odata/v4.01/odata-v4.01-part1-protocol.html#sec_SystemQueryOptionfilter

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

|Resource type|get|all|search|save|delete|
|-------------|:-:|:-:|:----:|:--:|:----:|
| ADDRESSES|&#10004;|&#10004;|&#10004;|&#10004;|&#10004;|
| COMMUNICATIONS|&#10004;|&#10004;|&#10004;|&#10004;|&#10004;|
| LINKDOCUMENTS|&#10004;|&#10004;|&#10004;|&#10004;|&#10004;|
| LINKS|&#10004;|&#10004;|&#10004;|&#10004;|&#10004;|
| LINKTYPES|&#10004;|&#10004;|&#10004;|&#10004;|&#10004;|
| SUBJECTDOCUMENTS|&#10004;|&#10004;|&#10004;|&#10004;|&#10004;|
| SUBJECTGROUPINGENTRIES|&#10004;|&#10004;|&#10004;|&#10004;|&#10004;|
| SUBJECTGROUPINGS|&#10004;|&#10004;|&#10004;|&#10004;|&#10004;|
| SUBJECTS|&#10004;|&#10004;|&#10004;|&#10004;|&#10004;|