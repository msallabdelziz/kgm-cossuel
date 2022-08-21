<?php

namespace ContainerE86xryi;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_JILlLWOService extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.JILlLWO' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.JILlLWO'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'demande' => ['privates', '.errored..service_locator.JILlLWO.App\\Entity\\Demande', NULL, 'Cannot autowire service ".service_locator.JILlLWO": it references class "App\\Entity\\Demande" but no such service exists.'],
            'demandeRepository' => ['privates', 'App\\Repository\\DemandeRepository', 'getDemandeRepositoryService', true],
            'doctrine' => ['services', 'doctrine', 'getDoctrineService', false],
            'installationRepository' => ['privates', 'App\\Repository\\InstallationRepository', 'getInstallationRepositoryService', true],
            'tools' => ['privates', 'App\\Services\\Tools', 'getToolsService', true],
        ], [
            'demande' => 'App\\Entity\\Demande',
            'demandeRepository' => 'App\\Repository\\DemandeRepository',
            'doctrine' => '?',
            'installationRepository' => 'App\\Repository\\InstallationRepository',
            'tools' => 'App\\Services\\Tools',
        ]);
    }
}
