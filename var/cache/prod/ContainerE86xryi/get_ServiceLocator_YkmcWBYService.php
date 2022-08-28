<?php

namespace ContainerE86xryi;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_YkmcWBYService extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.ykmcWBY' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.ykmcWBY'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'doctrine' => ['services', 'doctrine', 'getDoctrineService', false],
            'tools' => ['privates', 'App\\Services\\Tools', 'getToolsService', true],
        ], [
            'doctrine' => '?',
            'tools' => 'App\\Services\\Tools',
        ]);
    }
}