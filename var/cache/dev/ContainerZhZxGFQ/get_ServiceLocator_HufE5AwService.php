<?php

namespace ContainerZhZxGFQ;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_HufE5AwService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.HufE5Aw' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.HufE5Aw'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'transport' => ['privates', '.errored..service_locator.HufE5Aw.App\\Entity\\Transport', NULL, 'Cannot autowire service ".service_locator.HufE5Aw": it references class "App\\Entity\\Transport" but no such service exists.'],
        ], [
            'transport' => 'App\\Entity\\Transport',
        ]);
    }
}