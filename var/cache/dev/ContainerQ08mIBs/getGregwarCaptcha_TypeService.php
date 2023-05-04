<?php

namespace ContainerQ08mIBs;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getGregwarCaptcha_TypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'gregwar_captcha.type' shared service.
     *
     * @return \Gregwar\CaptchaBundle\Type\CaptchaType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'AbstractType.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'gregwar'.\DIRECTORY_SEPARATOR.'captcha-bundle'.\DIRECTORY_SEPARATOR.'Type'.\DIRECTORY_SEPARATOR.'CaptchaType.php';

        return $container->services['gregwar_captcha.type'] = new \Gregwar\CaptchaBundle\Type\CaptchaType(($container->services['request_stack'] ?? ($container->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), ($container->services['gregwar_captcha.generator'] ?? $container->load('getGregwarCaptcha_GeneratorService')), ($container->services['translator'] ?? $container->getTranslatorService()), $container->parameters['gregwar_captcha.config']);
    }
}
