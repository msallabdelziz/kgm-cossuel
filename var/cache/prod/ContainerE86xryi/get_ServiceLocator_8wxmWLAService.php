<?php

namespace ContainerE86xryi;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_8wxmWLAService extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.8wxmWLA' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.8wxmWLA'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'pointNonconf' => ['privates', '.errored..service_locator.8wxmWLA.App\\Entity\\PointNonconf', NULL, 'Cannot autowire service ".service_locator.8wxmWLA": it references class "App\\Entity\\PointNonconf" but no such service exists.'],
            'pointNonconfRepository' => ['privates', 'App\\Repository\\PointNonconfRepository', 'getPointNonconfRepositoryService', true],
        ], [
            'pointNonconf' => 'App\\Entity\\PointNonconf',
            'pointNonconfRepository' => 'App\\Repository\\PointNonconfRepository',
        ]);
    }
}