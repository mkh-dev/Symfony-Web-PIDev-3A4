<?php

namespace ContainerTlzoYBe;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_8b_I63CService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.8b.I63C' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.8b.I63C'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'abonnementRepository' => ['privates', 'App\\Repository\\AbonnementRepository', 'getAbonnementRepositoryService', true],
        ], [
            'abonnementRepository' => 'App\\Repository\\AbonnementRepository',
        ]);
    }
}