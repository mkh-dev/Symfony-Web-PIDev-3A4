<?php

<<<<<<<< HEAD:var/cache/dev/Container4epoOLh/getMaker_Renderer_FormTypeRendererService.php
namespace Container4epoOLh;
========
namespace ContainerXVF9GhU;
>>>>>>>> 9ea38196d607f303b1d99017947157b148f6168e:var/cache/dev/ContainerXVF9GhU/getMaker_Renderer_FormTypeRendererService.php


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMaker_Renderer_FormTypeRendererService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'maker.renderer.form_type_renderer' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\Renderer\FormTypeRenderer
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'maker-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Renderer'.\DIRECTORY_SEPARATOR.'FormTypeRenderer.php';

        return $container->privates['maker.renderer.form_type_renderer'] = new \Symfony\Bundle\MakerBundle\Renderer\FormTypeRenderer(($container->privates['maker.generator'] ?? $container->load('getMaker_GeneratorService')));
    }
}
