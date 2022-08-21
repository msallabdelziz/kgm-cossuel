<?php

namespace ContainerBt2szyx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_BvUl0YvService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.bvUl0Yv' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.bvUl0Yv'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'departement' => ['privates', '.errored..service_locator.bvUl0Yv.App\\Entity\\Departement', NULL, 'Cannot autowire service ".service_locator.bvUl0Yv": it references class "App\\Entity\\Departement" but no such service exists.'],
            'departementRepository' => ['privates', 'App\\Repository\\DepartementRepository', 'getDepartementRepositoryService', true],
            'localiteRepository' => ['privates', 'App\\Repository\\LocaliteRepository', 'getLocaliteRepositoryService', true],
        ], [
            'departement' => 'App\\Entity\\Departement',
            'departementRepository' => 'App\\Repository\\DepartementRepository',
            'localiteRepository' => 'App\\Repository\\LocaliteRepository',
        ]);
    }
}
