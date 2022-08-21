<?php

namespace ContainerE86xryi;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_4Kv7mGJService extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.4Kv7mGJ' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.4Kv7mGJ'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'rapport' => ['privates', '.errored..service_locator.4Kv7mGJ.App\\Entity\\Rapport', NULL, 'Cannot autowire service ".service_locator.4Kv7mGJ": it references class "App\\Entity\\Rapport" but no such service exists.'],
            'rapportRepository' => ['privates', 'App\\Repository\\RapportRepository', 'getRapportRepositoryService', true],
            'rubriqueRepository' => ['privates', 'App\\Repository\\RubriqueRepository', 'getRubriqueRepositoryService', true],
        ], [
            'rapport' => 'App\\Entity\\Rapport',
            'rapportRepository' => 'App\\Repository\\RapportRepository',
            'rubriqueRepository' => 'App\\Repository\\RubriqueRepository',
        ]);
    }
}
