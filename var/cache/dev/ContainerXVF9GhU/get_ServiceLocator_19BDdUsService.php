<?php

<<<<<<<< HEAD:var/cache/dev/Container4epoOLh/get_ServiceLocator_Y_Ows6zService.php
namespace Container4epoOLh;
========
namespace ContainerXVF9GhU;
>>>>>>>> 9ea38196d607f303b1d99017947157b148f6168e:var/cache/dev/ContainerXVF9GhU/get_ServiceLocator_19BDdUsService.php


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_19BDdUsService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.19BDdUs' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.19BDdUs'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'reservation2' => ['privates', '.errored..service_locator.19BDdUs.App\\Entity\\Reservation2', NULL, 'Cannot autowire service ".service_locator.19BDdUs": it references class "App\\Entity\\Reservation2" but no such service exists.'],
        ], [
            'reservation2' => 'App\\Entity\\Reservation2',
        ]);
    }
}