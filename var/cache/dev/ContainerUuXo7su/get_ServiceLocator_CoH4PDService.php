<?php

<<<<<<<< HEAD:var/cache/dev/ContainerUuXo7su/get_ServiceLocator_CoH4PDService.php
namespace ContainerUuXo7su;
========
namespace ContainerFz25pDv;

>>>>>>>> RymBranch:var/cache/dev/ContainerFz25pDv/get_ServiceLocator_CoH4PDService.php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_CoH4PDService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.CoH4_pD' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.CoH4_pD'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'transport' => ['privates', '.errored..service_locator.CoH4_pD.App\\Entity\\Transport', NULL, 'Cannot autowire service ".service_locator.CoH4_pD": it references class "App\\Entity\\Transport" but no such service exists.'],
        ], [
            'entityManager' => '?',
            'transport' => 'App\\Entity\\Transport',
        ]);
    }
}
