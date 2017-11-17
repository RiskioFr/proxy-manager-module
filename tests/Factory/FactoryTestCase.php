<?php
namespace Riskio\ProxyManagerModuleTest\Factory;

use PHPUnit\Framework\TestCase;
use ProxyManager\Configuration;
use Psr\Container\ContainerInterface;

class FactoryTestCase extends TestCase
{
    public function getContainer()
    {
        $configuration = new Configuration();

        $container = $this->prophesize(ContainerInterface::class);
        $container->get(Configuration::class)->willReturn($configuration);

        return $container;
    }
}
