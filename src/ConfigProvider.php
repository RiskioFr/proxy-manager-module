<?php
declare(strict_types=1);

namespace Riskio\ProxyManagerModule;

class ConfigProvider
{
    public function __invoke() : array
    {
        $config = (new Module())->getConfig();

        return [
            'proxy_manager' => $config['proxy_manager'],
            'dependencies' => $config['service_manager'],
        ];
    }
}
