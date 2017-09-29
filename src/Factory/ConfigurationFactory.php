<?php
namespace Riskio\ProxyManagerModule\Factory;

use ProxyManager\Configuration;
use Psr\Container\ContainerInterface;
use Zend\Hydrator\ClassMethods as ConfigurationHydrator;

class ConfigurationFactory
{
    public function __invoke(ContainerInterface $container) : Configuration
    {
        $config = $container->get('Config');

        return (new ConfigurationHydrator())->hydrate(
            $config['proxy_manager'],
            new Configuration()
        );
    }
}
