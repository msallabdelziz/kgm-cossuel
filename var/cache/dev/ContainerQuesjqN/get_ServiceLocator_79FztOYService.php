<?php

namespace ContainerQuesjqN;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_79FztOYService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.79FztOY' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.79FztOY'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'installation' => ['privates', '.errored..service_locator.79FztOY.App\\Entity\\Installation', NULL, 'Cannot autowire service ".service_locator.79FztOY": it references class "App\\Entity\\Installation" but no such service exists.'],
        ], [
            'installation' => 'App\\Entity\\Installation',
        ]);
    }
}
