<?php

<<<<<<<< HEAD:var/cache/dev/ContainerQv7k3lb/getContainer_GetenvService.php
namespace ContainerQv7k3lb;

========
namespace Container3eXcBqx;
>>>>>>>> MalekBranch:var/cache/dev/Container3eXcBqx/getContainer_GetenvService.php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getContainer_GetenvService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'container.getenv' shared service.
     *
     * @return \Closure
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['container.getenv'] = \Closure::fromCallable([0 => $container, 1 => 'getEnv']);
    }
}
