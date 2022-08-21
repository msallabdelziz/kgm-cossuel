<?php

namespace ContainerE86xryi;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_ZlGb2fJService extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.ZlGb2fJ' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.ZlGb2fJ'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'demandeRepository' => ['privates', 'App\\Repository\\DemandeRepository', 'getDemandeRepositoryService', true],
            'installation' => ['privates', '.errored..service_locator.ZlGb2fJ.App\\Entity\\Installation', NULL, 'Cannot autowire service ".service_locator.ZlGb2fJ": it references class "App\\Entity\\Installation" but no such service exists.'],
            'installationRepository' => ['privates', 'App\\Repository\\InstallationRepository', 'getInstallationRepositoryService', true],
            'pjRepository' => ['privates', 'App\\Repository\\PieceJointeRepository', 'getPieceJointeRepositoryService', true],
        ], [
            'demandeRepository' => 'App\\Repository\\DemandeRepository',
            'installation' => 'App\\Entity\\Installation',
            'installationRepository' => 'App\\Repository\\InstallationRepository',
            'pjRepository' => 'App\\Repository\\PieceJointeRepository',
        ]);
    }
}
