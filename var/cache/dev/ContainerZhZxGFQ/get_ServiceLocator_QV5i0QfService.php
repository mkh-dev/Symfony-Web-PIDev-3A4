<?php

namespace ContainerZhZxGFQ;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_QV5i0QfService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.QV5i0Qf' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.QV5i0Qf'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'ReservationRepository' => ['privates', 'App\\Repository\\ReservationRepository', 'getReservationRepositoryService', true],
            'paginator' => ['services', 'knp_paginator', 'getKnpPaginatorService', true],
        ], [
            'ReservationRepository' => 'App\\Repository\\ReservationRepository',
            'paginator' => '?',
        ]);
    }
}