<?php

<<<<<<<< HEAD:var/cache/dev/Container4epoOLh/get_ServiceLocator_PB20uqvService.php
namespace Container4epoOLh;
========
namespace ContainerXVF9GhU;
>>>>>>>> 9ea38196d607f303b1d99017947157b148f6168e:var/cache/dev/ContainerXVF9GhU/get_ServiceLocator_0J1782jService.php


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_0J1782jService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.0J1782j' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.0J1782j'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'vehicule' => ['privates', '.errored..service_locator.0J1782j.App\\Entity\\Vehicule', NULL, 'Cannot autowire service ".service_locator.0J1782j": it references class "App\\Entity\\Vehicule" but no such service exists.'],
        ], [
            'vehicule' => 'App\\Entity\\Vehicule',
        ]);
    }
}
