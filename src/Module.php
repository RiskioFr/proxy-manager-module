<?php
namespace Riskio\ProxyManagerModule;

use ProxyManager\Configuration;
use Zend\Mvc\MvcEvent;

class Module
{
    public function onBootstrap(MvcEvent $e)
    {
        $configuration = $this->getConfigurationFromMvcEvent($e);
        spl_autoload_register($configuration->getProxyAutoloader());
    }

    public function getConfig() : array
    {
        return include __DIR__ . '/../config/module.config.php';
    }

    private function getConfigurationFromMvcEvent(MvcEvent $e) : Configuration
    {
        $serviceManager = $e->getApplication()->getServiceManager();

        return $serviceManager->get(Configuration::class);
    }
}
