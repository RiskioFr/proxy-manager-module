Proxy Manager module for Zend Framework
=======================================

Proxy Manager integration into Zend Framework.

[![Build Status](https://img.shields.io/travis/RiskioFr/proxy-manager-module.svg?style=flat)](http://travis-ci.org/RiskioFr/proxy-manager-module)
[![Latest Stable Version](http://img.shields.io/packagist/v/riskio/proxy-manager-module.svg?style=flat)](https://packagist.org/packages/riskio/proxy-manager-module)
[![Total Downloads](http://img.shields.io/packagist/dt/riskio/proxy-manager-module.svg?style=flat)](https://packagist.org/packages/riskio/proxy-manager-module)

## Requirements

* PHP 7.0+
* [ocramius/proxy-manager ^2.0](https://github.com/Ocramius/ProxyManager)
* [zendframework/zend-filter ^2.7.1](https://github.com/zendframework/zend-filter)
* [zendframework/zend-hydrator ^1.1.0 || ^2.2.1](https://github.com/zendframework/zend-hydrator)
* [zendframework/zend-mvc ^2.7.10 || ^3.0.2](https://github.com/zendframework/zend-mvc)

## Installation

Proxy Manager module must be installed through Composer. For Composer documentation, please refer to [getcomposer.org](http://getcomposer.org).

You can install the module from command line:

```sh
$ composer require riskio/proxy-manager-module
```

Enable the module by adding `Riskio\ProxyManagerModule` key in your `application.config.php` file. In order to configure the module, you must copy and paste the `proxy_manager.global.php.dist` file to your `config/autoload` folder.

## Testing

``` bash
$ vendor/bin/phpunit
```

## Credits

- [Nicolas Eeckeloo](https://github.com/neeckeloo)
- [All Contributors](https://github.com/RiskioFr/proxy-manager-module/contributors)

## License

The MIT License (MIT). Please see [License File](https://github.com/RiskioFr/proxy-manager-module/blob/master/LICENSE) for more information.
