<?php

<<<<<<<< HEAD:var/cache/dev/Container1kiG494/get_ServiceLocator_UnjcfIqService.php
namespace Container1kiG494;
========
namespace ContainerB6UOwIP;
>>>>>>>> 9ea38196d607f303b1d99017947157b148f6168e:var/cache/dev/ContainerB6UOwIP/get_ServiceLocator_GMaAxnDService.php


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_GMaAxnDService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.GMaAxnD' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.GMaAxnD'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'authenticator' => ['privates', 'App\\Security\\UsersAuthenticator', 'getUsersAuthenticatorService', true],
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'userAuthenticator' => ['privates', 'security.user_authenticator', 'getSecurity_UserAuthenticatorService', true],
            'userPasswordHasher' => ['privates', 'security.user_password_hasher', 'getSecurity_UserPasswordHasherService', true],
        ], [
            'authenticator' => 'App\\Security\\UsersAuthenticator',
            'entityManager' => '?',
            'userAuthenticator' => '?',
            'userPasswordHasher' => '?',
        ]);
    }
}
