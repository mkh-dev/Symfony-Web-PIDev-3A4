<?php

namespace ContainerIKTAgX3;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_GZIaKpLService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.gZIaKpL' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.gZIaKpL'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'reservation2' => ['privates', '.errored..service_locator.gZIaKpL.App\\Entity\\Reservation2', NULL, 'Cannot autowire service ".service_locator.gZIaKpL": it references class "App\\Entity\\Reservation2" but no such service exists.'],
        ], [
            'entityManager' => '?',
            'reservation2' => 'App\\Entity\\Reservation2',
        ]);
    }
}
