<?php

namespace ContainerPGktLXH;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Kcphr5gService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.kcphr5g' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.kcphr5g'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'repository' => ['privates', 'App\\Repository\\ReservationRepository', 'getReservationRepositoryService', true],
            'reservation' => ['privates', '.errored..service_locator.kcphr5g.App\\Entity\\Reservation', NULL, 'Cannot autowire service ".service_locator.kcphr5g": it references class "App\\Entity\\Reservation" but no such service exists.'],
        ], [
            'repository' => 'App\\Repository\\ReservationRepository',
            'reservation' => 'App\\Entity\\Reservation',
        ]);
    }
}
