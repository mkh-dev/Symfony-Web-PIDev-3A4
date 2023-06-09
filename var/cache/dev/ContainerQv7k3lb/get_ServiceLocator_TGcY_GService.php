<?php

namespace ContainerQv7k3lb;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_TGcY_GService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.T_GcY.G' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.T_GcY.G'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'categorieEvent' => ['privates', '.errored..service_locator.T_GcY.G.App\\Entity\\CategorieEvent', NULL, 'Cannot autowire service ".service_locator.T_GcY.G": it references class "App\\Entity\\CategorieEvent" but no such service exists.'],
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
        ], [
            'categorieEvent' => 'App\\Entity\\CategorieEvent',
            'entityManager' => '?',
        ]);
    }
}
