<?php

namespace ContainerExjKz3n;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_IVJ8gI9Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.iVJ8gI9' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.iVJ8gI9'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'vehicule' => ['privates', '.errored..service_locator.iVJ8gI9.App\\Entity\\Vehicule', NULL, 'Cannot autowire service ".service_locator.iVJ8gI9": it references class "App\\Entity\\Vehicule" but no such service exists.'],
        ], [
            'entityManager' => '?',
            'vehicule' => 'App\\Entity\\Vehicule',
        ]);
    }
}
