<?php

<<<<<<<< HEAD:var/cache/dev/Container6GyGKWz/getApiPlatform_Listener_View_ValidateService.php
<<<<<<<< HEAD:var/cache/dev/ContainerQv7k3lb/getApiPlatform_Listener_View_ValidateService.php
namespace ContainerQv7k3lb;

========
namespace Container6GyGKWz;
>>>>>>>> MalekBranch:var/cache/dev/Container6GyGKWz/getApiPlatform_Listener_View_ValidateService.php
========
namespace ContainerFz25pDv;

>>>>>>>> RymBranch:var/cache/dev/ContainerFz25pDv/getApiPlatform_Listener_View_ValidateService.php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApiPlatform_Listener_View_ValidateService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'api_platform.listener.view.validate' shared service.
     *
     * @return \ApiPlatform\Symfony\EventListener\ValidateListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'api-platform'.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Symfony'.\DIRECTORY_SEPARATOR.'EventListener'.\DIRECTORY_SEPARATOR.'ValidateListener.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'api-platform'.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Validator'.\DIRECTORY_SEPARATOR.'ValidatorInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'api-platform'.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Symfony'.\DIRECTORY_SEPARATOR.'Validator'.\DIRECTORY_SEPARATOR.'Validator.php';

        return $container->privates['api_platform.listener.view.validate'] = new \ApiPlatform\Symfony\EventListener\ValidateListener(new \ApiPlatform\Symfony\Validator\Validator(($container->services['.container.private.validator'] ?? $container->get_Container_Private_ValidatorService()), $container), ($container->privates['api_platform.metadata.resource.metadata_factory.cached'] ?? $container->getApiPlatform_Metadata_Resource_MetadataFactory_CachedService()));
    }
}
