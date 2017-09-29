<?php
namespace Riskio\ProxyManagerModuleTest\Factory;

use ProxyManager\Factory\LazyLoadingValueHolderFactory;
use Riskio\ProxyManagerModule\Factory\LazyLoadingValueHolderFactoryFactory;

class LazyLoadingValueHolderFactoryFactoryTest extends FactoryTestCase
{
    public function testCreateInstance()
    {
        $factory = new LazyLoadingValueHolderFactoryFactory();
        $container = $this->getContainer();

        $service = $factory($container->reveal());

        $this->assertInstanceOf(LazyLoadingValueHolderFactory::class, $service);
    }
}
