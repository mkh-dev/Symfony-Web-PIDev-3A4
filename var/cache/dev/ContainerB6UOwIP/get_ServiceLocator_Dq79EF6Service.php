<?php

<<<<<<<< HEAD:var/cache/dev/Container1kiG494/get_ServiceLocator_MHm6meiService.php
namespace Container1kiG494;
========
namespace ContainerB6UOwIP;
>>>>>>>> 9ea38196d607f303b1d99017947157b148f6168e:var/cache/dev/ContainerB6UOwIP/get_ServiceLocator_Dq79EF6Service.php


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Dq79EF6Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Dq79EF6' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Dq79EF6'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'reclamation' => ['privates', '.errored..service_locator.Dq79EF6.App\\Entity\\Reclamations', NULL, 'Cannot autowire service ".service_locator.Dq79EF6": it references class "App\\Entity\\Reclamations" but no such service exists.'],
        ], [
            'entityManager' => '?',
            'reclamation' => 'App\\Entity\\Reclamations',
        ]);
    }
}