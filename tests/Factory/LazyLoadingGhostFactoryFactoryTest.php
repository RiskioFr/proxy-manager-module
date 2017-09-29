<?php
namespace Riskio\ProxyManagerModuleTest\Factory;

use ProxyManager\Factory\LazyLoadingGhostFactory;
use Riskio\ProxyManagerModule\Factory\LazyLoadingGhostFactoryFactory;

class LazyLoadingGhostFactoryFactoryTest extends FactoryTestCase
{
    public function testCreateInstance()
    {
        $factory = new LazyLoadingGhostFactoryFactory();
        $container = $this->getContainer();

        $service = $factory($container->reveal());

        $this->assertInstanceOf(LazyLoadingGhostFactory::class, $service);
    }
}
