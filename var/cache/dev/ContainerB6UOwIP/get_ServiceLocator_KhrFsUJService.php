<?php

<<<<<<<< HEAD:var/cache/dev/Container1kiG494/get_ServiceLocator_DQL_1amService.php
namespace Container1kiG494;
========
namespace ContainerB6UOwIP;
>>>>>>>> 9ea38196d607f303b1d99017947157b148f6168e:var/cache/dev/ContainerB6UOwIP/get_ServiceLocator_KhrFsUJService.php


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_KhrFsUJService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.khrFsUJ' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.khrFsUJ'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'FactureRepository' => ['privates', 'App\\Repository\\FactureRepository', 'getFactureRepositoryService', true],
            'paginator' => ['services', 'knp_paginator', 'getKnpPaginatorService', true],
        ], [
            'FactureRepository' => 'App\\Repository\\FactureRepository',
            'paginator' => '?',
        ]);
    }
}
