<?php

namespace ContainerZhZxGFQ;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_XB8m1aFService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.XB8m1aF' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.XB8m1aF'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'categorieProd' => ['privates', '.errored..service_locator.XB8m1aF.App\\Entity\\CategorieProd', NULL, 'Cannot autowire service ".service_locator.XB8m1aF": it references class "App\\Entity\\CategorieProd" but no such service exists.'],
        ], [
            'categorieProd' => 'App\\Entity\\CategorieProd',
        ]);
    }
}
