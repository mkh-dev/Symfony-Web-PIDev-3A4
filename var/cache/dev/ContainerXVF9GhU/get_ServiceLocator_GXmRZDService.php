<?php

<<<<<<<< HEAD:var/cache/dev/Container4epoOLh/get_ServiceLocator_Kcphr5gService.php
namespace Container4epoOLh;
========
namespace ContainerXVF9GhU;
>>>>>>>> 9ea38196d607f303b1d99017947157b148f6168e:var/cache/dev/ContainerXVF9GhU/get_ServiceLocator_GXmRZDService.php


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_GXmRZDService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.GXmR_ZD' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.GXmR_ZD'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'repository' => ['privates', 'App\\Repository\\ReservationRepository', 'getReservationRepositoryService', true],
            'reservation' => ['privates', '.errored..service_locator.GXmR_ZD.App\\Entity\\Reservation', NULL, 'Cannot autowire service ".service_locator.GXmR_ZD": it references class "App\\Entity\\Reservation" but no such service exists.'],
        ], [
            'repository' => 'App\\Repository\\ReservationRepository',
            'reservation' => 'App\\Entity\\Reservation',
        ]);
    }
}
