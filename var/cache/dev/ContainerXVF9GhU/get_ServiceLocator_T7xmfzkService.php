<?php

<<<<<<<< HEAD:var/cache/dev/Container4epoOLh/get_ServiceLocator_GQZbvNRService.php
namespace Container4epoOLh;
========
namespace ContainerXVF9GhU;
>>>>>>>> 9ea38196d607f303b1d99017947157b148f6168e:var/cache/dev/ContainerXVF9GhU/get_ServiceLocator_T7xmfzkService.php


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_T7xmfzkService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.T7xmfzk' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.T7xmfzk'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'doctrine' => ['services', 'doctrine', 'getDoctrineService', false],
        ], [
            'doctrine' => '?',
        ]);
    }
}