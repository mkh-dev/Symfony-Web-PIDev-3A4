<?php

<<<<<<<< HEAD:var/cache/dev/Container4epoOLh/getConsole_Command_EventDispatcherDebugService.php
namespace Container4epoOLh;
========
namespace ContainerXVF9GhU;
>>>>>>>> 9ea38196d607f303b1d99017947157b148f6168e:var/cache/dev/ContainerXVF9GhU/getConsole_Command_EventDispatcherDebugService.php


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getConsole_Command_EventDispatcherDebugService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'console.command.event_dispatcher_debug' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\EventDispatcherDebugCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'EventDispatcherDebugCommand.php';

        $container->privates['console.command.event_dispatcher_debug'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\EventDispatcherDebugCommand(($container->privates['.service_locator.jlyTfzM'] ?? $container->load('get_ServiceLocator_JlyTfzMService')));

        $instance->setName('debug:event-dispatcher');
        $instance->setDescription('Display configured listeners for an application');

        return $instance;
    }
}
