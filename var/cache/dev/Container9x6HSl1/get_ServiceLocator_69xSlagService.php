<?php

namespace Container9x6HSl1;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_69xSlagService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.69xSlag' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.69xSlag'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'vehicule' => ['privates', '.errored..service_locator.69xSlag.App\\Entity\\Vehicule', NULL, 'Cannot autowire service ".service_locator.69xSlag": it references class "App\\Entity\\Vehicule" but no such service exists.'],
        ], [
            'entityManager' => '?',
            'vehicule' => 'App\\Entity\\Vehicule',
        ]);
    }
}
