<?php

namespace ContainerNbUInLm;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_XVjfyzaService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.XVjfyza' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.XVjfyza'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'facture' => ['privates', '.errored..service_locator.XVjfyza.App\\Entity\\Facture', NULL, 'Cannot autowire service ".service_locator.XVjfyza": it references class "App\\Entity\\Facture" but no such service exists.'],
        ], [
            'facture' => 'App\\Entity\\Facture',
        ]);
    }
}
