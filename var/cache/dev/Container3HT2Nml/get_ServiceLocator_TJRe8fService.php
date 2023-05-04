<?php

namespace Container3HT2Nml;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_TJRe8fService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.tJRe8f_' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.tJRe8f_'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'abonnementRepository' => ['privates', 'App\\Repository\\AbonnementRepository', 'getAbonnementRepositoryService', true],
            'paginator' => ['services', 'knp_paginator', 'getKnpPaginatorService', true],
        ], [
            'abonnementRepository' => 'App\\Repository\\AbonnementRepository',
            'paginator' => '?',
        ]);
    }
}
