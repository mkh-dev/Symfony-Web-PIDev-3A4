<?php

<<<<<<<< HEAD:var/cache/dev/Container1kiG494/getReservationTypeService.php
namespace Container1kiG494;
========
namespace ContainerB6UOwIP;
>>>>>>>> 9ea38196d607f303b1d99017947157b148f6168e:var/cache/dev/ContainerB6UOwIP/getReservationTypeService.php


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getReservationTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\ReservationType' shared autowired service.
     *
     * @return \App\Form\ReservationType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'AbstractType.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Form'.\DIRECTORY_SEPARATOR.'ReservationType.php';

        return $container->privates['App\\Form\\ReservationType'] = new \App\Form\ReservationType();
    }
}