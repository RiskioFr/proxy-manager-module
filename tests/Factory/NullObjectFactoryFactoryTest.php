<?php
namespace Riskio\ProxyManagerModuleTest\Factory;

use ProxyManager\Factory\NullObjectFactory;
use Riskio\ProxyManagerModule\Factory\NullObjectFactoryFactory;

class NullObjectFactoryFactoryTest extends FactoryTestCase
{
    public function testCreateInstance()
    {
        $factory = new NullObjectFactoryFactory();
        $container = $this->getContainer();

        $service = $factory($container->reveal());

        $this->assertInstanceOf(NullObjectFactory::class, $service);
    }
}
