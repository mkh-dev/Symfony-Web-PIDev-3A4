<?php

namespace ContainerExjKz3n;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_HWmt98OService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.hWmt98O' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.hWmt98O'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'categorieProd' => ['privates', '.errored..service_locator.hWmt98O.App\\Entity\\CategorieProd', NULL, 'Cannot autowire service ".service_locator.hWmt98O": it references class "App\\Entity\\CategorieProd" but no such service exists.'],
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
        ], [
            'categorieProd' => 'App\\Entity\\CategorieProd',
            'entityManager' => '?',
        ]);
    }
}
