<?php

<<<<<<<< Updated upstream:var/cache/dev/ContainerZEEs7nx/get_ServiceLocator_CT_CpltService.php
namespace ContainerZEEs7nx;
========
namespace Container6P8OaWR;
>>>>>>>> Stashed changes:var/cache/dev/Container6P8OaWR/get_ServiceLocator_CT_CpltService.php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_CT_CpltService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.CT.Cplt' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.CT.Cplt'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'reservation' => ['privates', '.errored..service_locator.CT.Cplt.App\\Entity\\Reservation', NULL, 'Cannot autowire service ".service_locator.CT.Cplt": it references class "App\\Entity\\Reservation" but no such service exists.'],
        ], [
            'entityManager' => '?',
            'reservation' => 'App\\Entity\\Reservation',
        ]);
    }
}
