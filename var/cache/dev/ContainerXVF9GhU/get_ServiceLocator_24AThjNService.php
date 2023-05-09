<?php

namespace ContainerXVF9GhU;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_24AThjNService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.24AThjN' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.24AThjN'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'Normalizer' => ['services', '.container.private.serializer', 'get_Container_Private_SerializerService', false],
            'doctrine' => ['services', 'doctrine', 'getDoctrineService', false],
            'repoEvent' => ['privates', 'App\\Repository\\EventRepository', 'getEventRepositoryService', true],
            'repoU' => ['privates', 'App\\Repository\\UsersRepository', 'getUsersRepositoryService', true],
        ], [
            'Normalizer' => '?',
            'doctrine' => '?',
            'repoEvent' => 'App\\Repository\\EventRepository',
            'repoU' => 'App\\Repository\\UsersRepository',
        ]);
    }
}
