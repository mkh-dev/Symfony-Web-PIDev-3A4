<?php

<<<<<<<< HEAD:var/cache/dev/Container4epoOLh/getApiPlatform_Openapi_OptionsService.php
namespace Container4epoOLh;
========
namespace ContainerXVF9GhU;
>>>>>>>> 9ea38196d607f303b1d99017947157b148f6168e:var/cache/dev/ContainerXVF9GhU/getApiPlatform_Openapi_OptionsService.php


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApiPlatform_Openapi_OptionsService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'api_platform.openapi.options' shared service.
     *
     * @return \ApiPlatform\OpenApi\Options
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'api-platform'.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'OpenApi'.\DIRECTORY_SEPARATOR.'Options.php';

        return $container->privates['api_platform.openapi.options'] = new \ApiPlatform\OpenApi\Options('', '', '0.0.0', false, 'oauth2', 'application', '', '', '', [], [], NULL, NULL, NULL, NULL, NULL, NULL);
    }
}
