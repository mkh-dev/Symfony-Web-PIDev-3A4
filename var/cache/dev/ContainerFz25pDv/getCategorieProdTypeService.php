<?php

<<<<<<<< HEAD:var/cache/dev/Container6GyGKWz/getCategorieProdTypeService.php
<<<<<<<< HEAD:var/cache/dev/ContainerQv7k3lb/getCategorieProdTypeService.php
namespace ContainerQv7k3lb;

========
namespace Container6GyGKWz;
>>>>>>>> MalekBranch:var/cache/dev/Container6GyGKWz/getCategorieProdTypeService.php
========
namespace ContainerFz25pDv;

>>>>>>>> RymBranch:var/cache/dev/ContainerFz25pDv/getCategorieProdTypeService.php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCategorieProdTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\CategorieProdType' shared autowired service.
     *
     * @return \App\Form\CategorieProdType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'AbstractType.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Form'.\DIRECTORY_SEPARATOR.'CategorieProdType.php';

        return $container->privates['App\\Form\\CategorieProdType'] = new \App\Form\CategorieProdType();
    }
}
