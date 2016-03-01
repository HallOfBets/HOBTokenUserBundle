# README

[![SensioLabsInsight](https://insight.sensiolabs.com/projects/397e9aab-d4d2-4ef0-a947-7236a4d1adae/big.png)](https://insight.sensiolabs.com/projects/397e9aab-d4d2-4ef0-a947-7236a4d1adae)

## Installation
To install this bundle, run the command below and you will get the latest version.

``` bash
composer require hob/token-user-bundle
```

To use the newest (maybe unstable) version please add following into your composer.json:

``` json
{
    "require": {
        "hob/token-user-bundle": "dev-master"
    }
}
```


## Usage
Load bundle in AppKernel.php:
``` php
new HOB\TokenUserBundle\HOBTokenUserBundle()
```

Configuration in config.yml:
``` yaml
hob_token_user:
```
