<?php

<<<<<<<< HEAD:var/cache/dev/Container4epoOLh/getApiPlatform_Listener_View_RespondService.php
namespace Container4epoOLh;
========
namespace ContainerXVF9GhU;
>>>>>>>> 9ea38196d607f303b1d99017947157b148f6168e:var/cache/dev/ContainerXVF9GhU/getApiPlatform_Listener_View_RespondService.php


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApiPlatform_Listener_View_RespondService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'api_platform.listener.view.respond' shared service.
     *
     * @return \ApiPlatform\Symfony\EventListener\RespondListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'api-platform'.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Symfony'.\DIRECTORY_SEPARATOR.'EventListener'.\DIRECTORY_SEPARATOR.'RespondListener.php';

        return $container->privates['api_platform.listener.view.respond'] = new \ApiPlatform\Symfony\EventListener\RespondListener(($container->privates['api_platform.metadata.resource.metadata_factory.cached'] ?? $container->getApiPlatform_Metadata_Resource_MetadataFactory_CachedService()), NULL);
    }
}
