<?php
namespace Riskio\ProxyManagerModuleTest\Factory;

use PHPUnit_Framework_TestCase;
use ProxyManager\Configuration;
use Psr\Container\ContainerInterface;

class FactoryTestCase extends PHPUnit_Framework_TestCase
{
    public function getContainer()
    {
        $configuration = $this->prophesize(Configuration::class);

        $container = $this->prophesize(ContainerInterface::class);
        $container->get(Configuration::class)->willReturn($configuration->reveal());

        return $container;
    }
}
