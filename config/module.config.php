<?php
use ProxyManager\Configuration;
use ProxyManager\Factory;
use Riskio\ProxyManagerModule\Factory as ModuleFactory;

return [
    'proxy_manager' => [],
    'service_manager' => [
        'factories' => [
            Configuration::class => ModuleFactory\ConfigurationFactory::class,

            Factory\AccessInterceptorValueHolderFactory::class => ModuleFactory\AccessInterceptorValueHolderFactoryFactory::class,
            Factory\LazyLoadingGhostFactory::class             => ModuleFactory\LazyLoadingGhostFactoryFactory::class,
            Factory\LazyLoadingValueHolderFactory::class       => ModuleFactory\LazyLoadingValueHolderFactoryFactory::class,
            Factory\NullObjectFactory::class                   => ModuleFactory\NullObjectFactoryFactory::class,
        ],
    ],
];
