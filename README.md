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

## Available resource types and their access methods

To be able to use the 'short form' for the resource type, add a
```php
use AbacusAPIClient\ResourceType;
```

to your code. You then can reference the resource type like
```php
$abacusClient->resource( ResourceType::ADDRESSES );
```

|Resource type|get|all|search|save|delete|add|
|-------------|:-:|:-:|:----:|:--:|:----:|:-:|
| ADDRESSES|&#10004;|&#10004;|&ndash;|&ndash;|&#10004;|&ndash;|