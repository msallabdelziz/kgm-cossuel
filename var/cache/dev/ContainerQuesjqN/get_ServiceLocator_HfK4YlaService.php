<?php

namespace ContainerQuesjqN;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_HfK4YlaService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.HfK4Yla' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.HfK4Yla'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'typeConstruction' => ['privates', '.errored..service_locator.HfK4Yla.App\\Entity\\TypeConstruction', NULL, 'Cannot autowire service ".service_locator.HfK4Yla": it references class "App\\Entity\\TypeConstruction" but no such service exists.'],
        ], [
            'typeConstruction' => 'App\\Entity\\TypeConstruction',
        ]);
    }
}
