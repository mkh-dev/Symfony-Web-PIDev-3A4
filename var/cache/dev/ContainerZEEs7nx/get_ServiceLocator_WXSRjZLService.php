<?php

<<<<<<<< Updated upstream:var/cache/dev/ContainerZEEs7nx/get_ServiceLocator_WXSRjZLService.php
namespace ContainerZEEs7nx;
========
namespace Container6P8OaWR;
>>>>>>>> Stashed changes:var/cache/dev/Container6P8OaWR/get_ServiceLocator_WXSRjZLService.php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_WXSRjZLService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.wXSRjZL' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.wXSRjZL'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'evenement' => ['privates', '.errored..service_locator.wXSRjZL.App\\Entity\\Evenement', NULL, 'Cannot autowire service ".service_locator.wXSRjZL": it references class "App\\Entity\\Evenement" but no such service exists.'],
        ], [
            'entityManager' => '?',
            'evenement' => 'App\\Entity\\Evenement',
        ]);
    }
}
