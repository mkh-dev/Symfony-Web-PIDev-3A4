<?php

<<<<<<<< HEAD:var/cache/dev/Container6GyGKWz/getCache_SystemService.php
<<<<<<<< HEAD:var/cache/dev/ContainerQv7k3lb/getCache_SystemService.php
namespace ContainerQv7k3lb;

========
namespace Container6GyGKWz;
>>>>>>>> MalekBranch:var/cache/dev/Container6GyGKWz/getCache_SystemService.php
========
namespace ContainerWExVuzY;

>>>>>>>> RymBranch:var/cache/dev/ContainerWExVuzY/getCache_SystemService.php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCache_SystemService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'cache.system' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\AdapterInterface
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['cache.system'] = \Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('SHWsK9Zyuu', 0, $container->getParameter('container.build_id'), ($container->targetDir.''.'/pools/system'), ($container->privates['logger'] ?? ($container->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())));
    }
}
