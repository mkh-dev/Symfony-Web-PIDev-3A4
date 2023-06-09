<?php

namespace ContainerQv7k3lb;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Cyg1ViBService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.cyg1ViB' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.cyg1ViB'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'user' => ['privates', '.errored..service_locator.cyg1ViB.App\\Entity\\Users', NULL, 'Cannot autowire service ".service_locator.cyg1ViB": it references class "App\\Entity\\Users" but no such service exists.'],
        ], [
            'entityManager' => '?',
            'user' => 'App\\Entity\\Users',
        ]);
    }
}
