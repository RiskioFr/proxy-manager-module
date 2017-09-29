<?php
namespace Riskio\ProxyManagerModule\Factory;

use ProxyManager\Configuration;
use ProxyManager\Factory\LazyLoadingGhostFactory;
use Psr\Container\ContainerInterface;

class LazyLoadingGhostFactoryFactory
{
    public function __invoke(ContainerInterface $container) : LazyLoadingGhostFactory
    {
        return new LazyLoadingGhostFactory(
            $container->get(Configuration::class)
        );
    }
}
