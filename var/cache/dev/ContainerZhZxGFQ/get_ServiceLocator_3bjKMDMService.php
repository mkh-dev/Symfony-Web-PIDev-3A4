<?php

namespace ContainerZhZxGFQ;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_3bjKMDMService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.3bjKMDM' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.3bjKMDM'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'abonnement' => ['privates', '.errored..service_locator.3bjKMDM.App\\Entity\\Abonnement', NULL, 'Cannot autowire service ".service_locator.3bjKMDM": it references class "App\\Entity\\Abonnement" but no such service exists.'],
        ], [
            'abonnement' => 'App\\Entity\\Abonnement',
        ]);
    }
}