<?php

namespace ContainerE86xryi;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_UQBxIvEService extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.uQBxIvE' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.uQBxIvE'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'typeConstruction' => ['privates', '.errored..service_locator.uQBxIvE.App\\Entity\\TypeConstruction', NULL, 'Cannot autowire service ".service_locator.uQBxIvE": it references class "App\\Entity\\TypeConstruction" but no such service exists.'],
        ], [
            'typeConstruction' => 'App\\Entity\\TypeConstruction',
        ]);
    }
}
