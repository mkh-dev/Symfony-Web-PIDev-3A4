<?php

<<<<<<<< HEAD:var/cache/dev/ContainerUuXo7su/get_ServiceLocator_PB20uqvService.php
namespace ContainerUuXo7su;
========
namespace ContainerFz25pDv;

>>>>>>>> RymBranch:var/cache/dev/ContainerFz25pDv/get_ServiceLocator_PB20uqvService.php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_PB20uqvService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.pB20uqv' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.pB20uqv'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'vehicule' => ['privates', '.errored..service_locator.pB20uqv.App\\Entity\\Vehicule', NULL, 'Cannot autowire service ".service_locator.pB20uqv": it references class "App\\Entity\\Vehicule" but no such service exists.'],
        ], [
            'vehicule' => 'App\\Entity\\Vehicule',
        ]);
    }
}