<?php

<<<<<<<< HEAD:var/cache/dev/ContainerQv7k3lb/getApiPlatform_Action_NotExposedService.php
namespace ContainerQv7k3lb;

========
namespace Container6GyGKWz;
>>>>>>>> MalekBranch:var/cache/dev/Container6GyGKWz/getApiPlatform_Action_NotExposedService.php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApiPlatform_Action_NotExposedService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'api_platform.action.not_exposed' shared service.
     *
     * @return \ApiPlatform\Action\NotExposedAction
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'api-platform'.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Action'.\DIRECTORY_SEPARATOR.'NotExposedAction.php';

        return $container->services['api_platform.action.not_exposed'] = new \ApiPlatform\Action\NotExposedAction();
    }
}
