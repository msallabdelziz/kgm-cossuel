<?php

namespace ContainerQuesjqN;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_HhRj8OLService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.HhRj8OL' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.HhRj8OL'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'departement' => ['privates', '.errored..service_locator.HhRj8OL.App\\Entity\\Departement', NULL, 'Cannot autowire service ".service_locator.HhRj8OL": it references class "App\\Entity\\Departement" but no such service exists.'],
            'departementRepository' => ['privates', 'App\\Repository\\DepartementRepository', 'getDepartementRepositoryService', true],
            'regionRepository' => ['privates', 'App\\Repository\\RegionRepository', 'getRegionRepositoryService', true],
        ], [
            'departement' => 'App\\Entity\\Departement',
            'departementRepository' => 'App\\Repository\\DepartementRepository',
            'regionRepository' => 'App\\Repository\\RegionRepository',
        ]);
    }
}
