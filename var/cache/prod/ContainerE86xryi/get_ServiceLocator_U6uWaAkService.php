<?php

namespace ContainerE86xryi;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_U6uWaAkService extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.u6uWaAk' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.u6uWaAk'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'agentRepository' => ['privates', 'App\\Repository\\AgentRepository', 'getAgentRepositoryService', true],
            'dossier' => ['privates', '.errored..service_locator.u6uWaAk.App\\Entity\\Dossier', NULL, 'Cannot autowire service ".service_locator.u6uWaAk": it references class "App\\Entity\\Dossier" but no such service exists.'],
            'dossierRepository' => ['privates', 'App\\Repository\\DossierRepository', 'getDossierRepositoryService', true],
            'paiementRepository' => ['privates', 'App\\Repository\\PaiementRepository', 'getPaiementRepositoryService', true],
            'visiteRepository' => ['privates', 'App\\Repository\\VisiteRepository', 'getVisiteRepositoryService', true],
        ], [
            'agentRepository' => 'App\\Repository\\AgentRepository',
            'dossier' => 'App\\Entity\\Dossier',
            'dossierRepository' => 'App\\Repository\\DossierRepository',
            'paiementRepository' => 'App\\Repository\\PaiementRepository',
            'visiteRepository' => 'App\\Repository\\VisiteRepository',
        ]);
    }
}
