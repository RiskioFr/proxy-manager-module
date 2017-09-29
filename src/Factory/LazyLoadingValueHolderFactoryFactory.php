<?php
namespace Riskio\ProxyManagerModule\Factory;

use ProxyManager\Configuration;
use ProxyManager\Factory\LazyLoadingValueHolderFactory;
use Psr\Container\ContainerInterface;

class LazyLoadingValueHolderFactoryFactory
{
    public function __invoke(ContainerInterface $container) : LazyLoadingValueHolderFactory
    {
        return new LazyLoadingValueHolderFactory(
            $container->get(Configuration::class)
        );
    }
}
