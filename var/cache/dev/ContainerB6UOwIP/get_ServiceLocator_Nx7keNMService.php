<?php

namespace ContainerB6UOwIP;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Nx7keNMService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.nx7keNM' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.nx7keNM'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'repo' => ['privates', 'App\\Repository\\ReservationRepository', 'getReservationRepositoryService', true],
            'repoEvent' => ['privates', 'App\\Repository\\EventRepository', 'getEventRepositoryService', true],
            'serializer' => ['services', '.container.private.serializer', 'get_Container_Private_SerializerService', false],
        ], [
            'repo' => 'App\\Repository\\ReservationRepository',
            'repoEvent' => 'App\\Repository\\EventRepository',
            'serializer' => '?',
        ]);
    }
}
