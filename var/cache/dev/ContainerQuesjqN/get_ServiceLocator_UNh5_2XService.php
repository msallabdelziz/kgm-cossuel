<?php

namespace ContainerQuesjqN;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_UNh5_2XService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.uNh5.2X' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.uNh5.2X'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'localite' => ['privates', '.errored..service_locator.uNh5.2X.App\\Entity\\Localite', NULL, 'Cannot autowire service ".service_locator.uNh5.2X": it references class "App\\Entity\\Localite" but no such service exists.'],
            'localiteRepository' => ['privates', 'App\\Repository\\LocaliteRepository', 'getLocaliteRepositoryService', true],
        ], [
            'localite' => 'App\\Entity\\Localite',
            'localiteRepository' => 'App\\Repository\\LocaliteRepository',
        ]);
    }
}
