<?php

namespace ContainerZhZxGFQ;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_H9qcYEhService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.H9qcYEh' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.H9qcYEh'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'passwordEncoder' => ['services', '.container.private.security.password_encoder', 'get_Container_Private_Security_PasswordEncoderService', true],
            'usersRepository' => ['privates', 'App\\Repository\\UsersRepository', 'getUsersRepositoryService', true],
        ], [
            'passwordEncoder' => '?',
            'usersRepository' => 'App\\Repository\\UsersRepository',
        ]);
    }
}
