<?php
namespace Riskio\ProxyManagerModuleTest\Factory;

use ProxyManager\Factory\AccessInterceptorValueHolderFactory;
use Riskio\ProxyManagerModule\Factory\AccessInterceptorValueHolderFactoryFactory;

class AccessInterceptorValueHolderFactoryFactoryTest extends FactoryTestCase
{
    public function testCreateInstance()
    {
        $factory = new AccessInterceptorValueHolderFactoryFactory();
        $container = $this->getContainer();

        $service = $factory($container->reveal());

        $this->assertInstanceOf(AccessInterceptorValueHolderFactory::class, $service);
    }
}
