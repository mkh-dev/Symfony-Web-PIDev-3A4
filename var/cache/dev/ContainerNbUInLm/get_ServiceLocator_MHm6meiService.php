<?php

namespace ContainerNbUInLm;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_MHm6meiService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.MHm6mei' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.MHm6mei'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'reclamation' => ['privates', '.errored..service_locator.MHm6mei.App\\Entity\\Reclamations', NULL, 'Cannot autowire service ".service_locator.MHm6mei": it references class "App\\Entity\\Reclamations" but no such service exists.'],
        ], [
            'entityManager' => '?',
            'reclamation' => 'App\\Entity\\Reclamations',
        ]);
    }
}
