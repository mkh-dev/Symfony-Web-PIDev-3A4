<?php

namespace Container3rUWKvM;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Sgq_TmbService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Sgq.tmb' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Sgq.tmb'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'user' => ['privates', '.errored..service_locator.Sgq.tmb.App\\Entity\\Users', NULL, 'Cannot autowire service ".service_locator.Sgq.tmb": it references class "App\\Entity\\Users" but no such service exists.'],
        ], [
            'user' => 'App\\Entity\\Users',
        ]);
    }
}
