<?php

namespace ContainerExjKz3n;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_9v_K8D5Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.9v.k8D5' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.9v.k8D5'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'categorieEvent' => ['privates', '.errored..service_locator.9v.k8D5.App\\Entity\\CategorieEvent', NULL, 'Cannot autowire service ".service_locator.9v.k8D5": it references class "App\\Entity\\CategorieEvent" but no such service exists.'],
        ], [
            'categorieEvent' => 'App\\Entity\\CategorieEvent',
        ]);
    }
}
