<?php

<<<<<<<< HEAD:var/cache/dev/Container1kiG494/getUsersMobileControllerService.php
namespace Container1kiG494;
========
namespace ContainerB6UOwIP;
>>>>>>>> 9ea38196d607f303b1d99017947157b148f6168e:var/cache/dev/ContainerB6UOwIP/getUsersMobileControllerService.php


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUsersMobileControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\UsersMobileController' shared autowired service.
     *
     * @return \App\Controller\UsersMobileController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'AbstractController.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'UsersMobileController.php';

        $container->services['App\\Controller\\UsersMobileController'] = $instance = new \App\Controller\UsersMobileController();

        $instance->setContainer(($container->privates['.service_locator.GNc8e5B'] ?? $container->load('get_ServiceLocator_GNc8e5BService'))->withContext('App\\Controller\\UsersMobileController', $container));

        return $instance;
    }
}