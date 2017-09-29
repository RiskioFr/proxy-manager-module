<?php
namespace Riskio\ProxyManagerModule\Factory;

use ProxyManager\Configuration;
use ProxyManager\Factory\NullObjectFactory;
use Psr\Container\ContainerInterface;

class NullObjectFactoryFactory
{
    public function __invoke(ContainerInterface $container) : NullObjectFactory
    {
        return new NullObjectFactory(
            $container->get(Configuration::class)
        );
    }
}
