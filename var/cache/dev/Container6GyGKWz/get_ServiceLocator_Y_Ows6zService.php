<?php

namespace Container6GyGKWz;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Y_Ows6zService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.y.Ows6z' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.y.Ows6z'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'reservation2' => ['privates', '.errored..service_locator.y.Ows6z.App\\Entity\\Reservation2', NULL, 'Cannot autowire service ".service_locator.y.Ows6z": it references class "App\\Entity\\Reservation2" but no such service exists.'],
        ], [
            'reservation2' => 'App\\Entity\\Reservation2',
        ]);
    }
}
