<?php

namespace ContainerZhZxGFQ;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_T8q8jjaService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.T8q8jja' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.T8q8jja'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'reservation' => ['privates', '.errored..service_locator.T8q8jja.App\\Entity\\Reservation', NULL, 'Cannot autowire service ".service_locator.T8q8jja": it references class "App\\Entity\\Reservation" but no such service exists.'],
        ], [
            'entityManager' => '?',
            'reservation' => 'App\\Entity\\Reservation',
        ]);
    }
}
