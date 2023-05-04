<?php

namespace Container3eXcBqx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getGregwarCaptcha_ControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'gregwar_captcha.controller' shared autowired service.
     *
     * @return \Gregwar\CaptchaBundle\Controller\CaptchaController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'gregwar'.\DIRECTORY_SEPARATOR.'captcha-bundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'CaptchaController.php';

        return $container->services['gregwar_captcha.controller'] = new \Gregwar\CaptchaBundle\Controller\CaptchaController(($container->services['gregwar_captcha.generator'] ?? $container->load('getGregwarCaptcha_GeneratorService')), $container->parameters['gregwar_captcha.config']);
    }
}
