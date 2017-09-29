<?php
namespace Riskio\ProxyManagerModule\Factory;

use Psr\Container\ContainerInterface;
use ProxyManager\Configuration;
use ProxyManager\Factory\AccessInterceptorValueHolderFactory;

class AccessInterceptorValueHolderFactoryFactory
{
    public function __invoke(ContainerInterface $container) : AccessInterceptorValueHolderFactory
    {
        return new AccessInterceptorValueHolderFactory(
            $container->get(Configuration::class)
        );
    }
}
