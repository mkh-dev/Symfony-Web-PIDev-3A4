<?php

namespace ContainerFvwHzff;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Nblc3rDService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.nblc3rD' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.nblc3rD'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'entityManager' => ['privates', '.errored.3Lf_Za.', NULL, 'Cannot determine controller argument for "App\\Controller\\SerializerController::Add()": the $entityManager argument is type-hinted with the non-existent class or interface: "App\\Controller\\EntityManagerInterface". Did you forget to add a use statement?'],
            'normalizer' => ['services', '.container.private.serializer', 'get_Container_Private_SerializerService', false],
            'request' => ['privates', '.errored.AcBfDcj', NULL, 'Cannot determine controller argument for "App\\Controller\\SerializerController::Add()": the $request argument is type-hinted with the non-existent class or interface: "App\\Controller\\Request". Did you forget to add a use statement?'],
        ], [
            'entityManager' => '?',
            'normalizer' => '?',
            'request' => '?',
        ]);
    }
}
