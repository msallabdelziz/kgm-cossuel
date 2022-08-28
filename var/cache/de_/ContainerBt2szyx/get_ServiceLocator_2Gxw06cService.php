<?php

namespace ContainerBt2szyx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_2Gxw06cService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.2Gxw06c' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.2Gxw06c'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'localite' => ['privates', '.errored..service_locator.2Gxw06c.App\\Entity\\Localite', NULL, 'Cannot autowire service ".service_locator.2Gxw06c": it references class "App\\Entity\\Localite" but no such service exists.'],
            'localiteRepository' => ['privates', 'App\\Repository\\LocaliteRepository', 'getLocaliteRepositoryService', true],
        ], [
            'localite' => 'App\\Entity\\Localite',
            'localiteRepository' => 'App\\Repository\\LocaliteRepository',
        ]);
    }
}