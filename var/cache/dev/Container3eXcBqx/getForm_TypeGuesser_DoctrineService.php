<?php

<<<<<<<< HEAD:var/cache/dev/ContainerQv7k3lb/getForm_TypeGuesser_DoctrineService.php
namespace ContainerQv7k3lb;

========
namespace Container3eXcBqx;
>>>>>>>> MalekBranch:var/cache/dev/Container3eXcBqx/getForm_TypeGuesser_DoctrineService.php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getForm_TypeGuesser_DoctrineService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'form.type_guesser.doctrine' shared service.
     *
     * @return \Symfony\Bridge\Doctrine\Form\DoctrineOrmTypeGuesser
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'FormTypeGuesserInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'doctrine-bridge'.\DIRECTORY_SEPARATOR.'Form'.\DIRECTORY_SEPARATOR.'DoctrineOrmTypeGuesser.php';

        return $container->privates['form.type_guesser.doctrine'] = new \Symfony\Bridge\Doctrine\Form\DoctrineOrmTypeGuesser(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
