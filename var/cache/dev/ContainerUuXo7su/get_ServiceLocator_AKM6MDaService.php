<?php

<<<<<<<< HEAD:var/cache/dev/ContainerUuXo7su/get_ServiceLocator_AKM6MDaService.php
namespace ContainerUuXo7su;
========
namespace ContainerFz25pDv;

>>>>>>>> RymBranch:var/cache/dev/ContainerFz25pDv/get_ServiceLocator_AKM6MDaService.php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_AKM6MDaService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.aKM6MDa' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.aKM6MDa'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
        ], [
            'entityManager' => '?',
        ]);
    }
}