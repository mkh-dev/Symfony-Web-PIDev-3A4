<?php

<<<<<<<< Updated upstream:var/cache/dev/ContainerZEEs7nx/get_ServiceLocator_YRRNQrIService.php
namespace ContainerZEEs7nx;
========
namespace Container6P8OaWR;
>>>>>>>> Stashed changes:var/cache/dev/Container6P8OaWR/get_ServiceLocator_YRRNQrIService.php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_YRRNQrIService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.yRRNQrI' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.yRRNQrI'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'user' => ['privates', '.errored..service_locator.yRRNQrI.App\\Entity\\Users', NULL, 'Cannot autowire service ".service_locator.yRRNQrI": it references class "App\\Entity\\Users" but no such service exists.'],
            'userPasswordHasher' => ['privates', 'security.user_password_hasher', 'getSecurity_UserPasswordHasherService', true],
        ], [
            'entityManager' => '?',
            'user' => 'App\\Entity\\Users',
            'userPasswordHasher' => '?',
        ]);
    }
}
