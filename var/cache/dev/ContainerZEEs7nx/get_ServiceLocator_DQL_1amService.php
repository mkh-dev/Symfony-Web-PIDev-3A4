<?php

<<<<<<<< Updated upstream:var/cache/dev/ContainerZEEs7nx/get_ServiceLocator_DQL_1amService.php
namespace ContainerZEEs7nx;
========
namespace Container6P8OaWR;
>>>>>>>> Stashed changes:var/cache/dev/Container6P8OaWR/get_ServiceLocator_DQL_1amService.php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_DQL_1amService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.DQL.1am' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.DQL.1am'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'FactureRepository' => ['privates', 'App\\Repository\\FactureRepository', 'getFactureRepositoryService', true],
            'paginator' => ['services', 'knp_paginator', 'getKnpPaginatorService', true],
        ], [
            'FactureRepository' => 'App\\Repository\\FactureRepository',
            'paginator' => '?',
        ]);
    }
}
