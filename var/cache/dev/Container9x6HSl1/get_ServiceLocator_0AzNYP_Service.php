<?php

namespace Container9x6HSl1;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_0AzNYP_Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.0AzNYP.' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.0AzNYP.'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'categorieEvent' => ['privates', '.errored..service_locator.0AzNYP..App\\Entity\\CategorieEvent', NULL, 'Cannot autowire service ".service_locator.0AzNYP.": it references class "App\\Entity\\CategorieEvent" but no such service exists.'],
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
        ], [
            'categorieEvent' => 'App\\Entity\\CategorieEvent',
            'entityManager' => '?',
        ]);
    }
}