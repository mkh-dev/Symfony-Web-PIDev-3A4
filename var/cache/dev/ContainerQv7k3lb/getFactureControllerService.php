<?php

<<<<<<<< HEAD:var/cache/dev/ContainerQv7k3lb/getFactureControllerService.php
namespace ContainerQv7k3lb;

========
namespace Container3eXcBqx;
>>>>>>>> MalekBranch:var/cache/dev/Container3eXcBqx/getFactureControllerService.php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFactureControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\FactureController' shared autowired service.
     *
     * @return \App\Controller\FactureController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'AbstractController.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'FactureController.php';

        $container->services['App\\Controller\\FactureController'] = $instance = new \App\Controller\FactureController();

        $instance->setContainer(($container->privates['.service_locator.mx0UMmY'] ?? $container->load('get_ServiceLocator_Mx0UMmYService'))->withContext('App\\Controller\\FactureController', $container));

        return $instance;
    }
}
