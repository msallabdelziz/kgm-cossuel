<?php

namespace ContainerBt2szyx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Pbglbt1Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.pbglbt1' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.pbglbt1'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'agenceRepository' => ['privates', 'App\\Repository\\AgenceRepository', 'getAgenceRepositoryService', true],
            'demandeRepository' => ['privates', 'App\\Repository\\DemandeRepository', 'getDemandeRepositoryService', true],
            'doctrine' => ['services', 'doctrine', 'getDoctrineService', false],
            'pgn' => ['services', 'knp_paginator', 'getKnpPaginatorService', true],
            'tools' => ['privates', 'App\\Services\\Tools', 'getToolsService', true],
        ], [
            'agenceRepository' => 'App\\Repository\\AgenceRepository',
            'demandeRepository' => 'App\\Repository\\DemandeRepository',
            'doctrine' => '?',
            'pgn' => '?',
            'tools' => 'App\\Services\\Tools',
        ]);
    }
}