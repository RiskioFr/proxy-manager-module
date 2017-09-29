<?php
namespace Riskio\ProxyManagerModuleTest\Factory;

use ProxyManager\Configuration;
use Riskio\ProxyManagerModule\Factory\ConfigurationFactory;

class ConfigurationFactoryTest extends FactoryTestCase
{
    public function testCreateInstance()
    {
        $configFactory = new ConfigurationFactory();

        $config = [
            'proxy_manager' => [
                'proxies_target_dir' => 'foo',
            ],
        ];

        $container = $this->getContainer();
        $container->get('Config')->willReturn($config);

        $configuration = $configFactory($container->reveal());

        $this->assertInstanceOf(Configuration::class, $configuration);
        $this->assertEquals(
            $config['proxy_manager']['proxies_target_dir'],
            $configuration->getProxiesTargetDir()
        );
    }
}
