<?php

<<<<<<<< HEAD:var/cache/dev/Container4epoOLh/get_ServiceLocator_HWmt98OService.php
namespace Container4epoOLh;
========
namespace ContainerXVF9GhU;
>>>>>>>> 9ea38196d607f303b1d99017947157b148f6168e:var/cache/dev/ContainerXVF9GhU/get_ServiceLocator_RhSeH1Service.php


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_RhSeH1Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.rh_SeH1' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.rh_SeH1'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'categorieProd' => ['privates', '.errored..service_locator.rh_SeH1.App\\Entity\\CategorieProd', NULL, 'Cannot autowire service ".service_locator.rh_SeH1": it references class "App\\Entity\\CategorieProd" but no such service exists.'],
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
        ], [
            'categorieProd' => 'App\\Entity\\CategorieProd',
            'entityManager' => '?',
        ]);
    }
}