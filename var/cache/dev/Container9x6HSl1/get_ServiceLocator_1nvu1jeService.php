<?php

namespace Container9x6HSl1;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_1nvu1jeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.1nvu1je' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.1nvu1je'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'evenement' => ['privates', '.errored..service_locator.1nvu1je.App\\Entity\\Evenement', NULL, 'Cannot autowire service ".service_locator.1nvu1je": it references class "App\\Entity\\Evenement" but no such service exists.'],
        ], [
            'entityManager' => '?',
            'evenement' => 'App\\Entity\\Evenement',
        ]);
    }
}
