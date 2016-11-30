# severr-php API client
Get your application events and errors to Severr via the *Severr Client*.

- API version: 1.0.0

## Requirements

PHP 5.4.0 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/severr/severr-php.git"
    }
  ],
  "require": {
    "severr/severr-php": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once(__DIR__ . '/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
    require_once(__DIR__ . '/vendor/autoload.php');

    // initialize the client
    $severrClient = new \severr\SeverrClient("<REPLACE WITH API KEY>", null);

    // Option-1: register global exception handlers (optional)
    $severrClient->registerErrorHandlers();
    
    // Option-2: send event manually
    $appEvent = $severr_client->createAppEvent("Error", "TestType", "Test message from php");
    $severr_client->sendEvent($appEvent);

    // Option-3: catch and send error to Severr
    try {
        throw new Exception("test exception");
    } catch(Exception $e) {
        $severr_client->sendError("Error", $e);
    }

?>
```

## Documentation For Models

 - [AppEvent](generated/SwaggerClient-php/docs/Model/AppEvent.md)




