<?php

<<<<<<<< Updated upstream:var/cache/dev/Container00UJSnM/get_ServiceLocator_NjvUyPKService.php
namespace Container00UJSnM;
========
namespace ContainerMnVKAAF;
>>>>>>>> Stashed changes:var/cache/dev/ContainerMnVKAAF/get_ServiceLocator_NjvUyPKService.php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_NjvUyPKService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.njvUyPK' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.njvUyPK'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'facture' => ['privates', '.errored..service_locator.njvUyPK.App\\Entity\\Facture', NULL, 'Cannot autowire service ".service_locator.njvUyPK": it references class "App\\Entity\\Facture" but no such service exists.'],
        ], [
            'entityManager' => '?',
            'facture' => 'App\\Entity\\Facture',
        ]);
    }
}
