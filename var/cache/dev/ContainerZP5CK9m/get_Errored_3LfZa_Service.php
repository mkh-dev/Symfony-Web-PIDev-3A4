<?php

namespace ContainerZP5CK9m;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Errored_3LfZa_Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.errored.3Lf_Za.' shared service.
     *
     * @return \App\Controller\EntityManagerInterface
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->throw('Cannot determine controller argument for "App\\Controller\\SerializerController::Add()": the $entityManager argument is type-hinted with the non-existent class or interface: "App\\Controller\\EntityManagerInterface". Did you forget to add a use statement?');
    }
}
