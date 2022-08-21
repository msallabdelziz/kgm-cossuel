<?php

namespace ContainerBt2szyx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_LtFYYWService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.LtF_yYW' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.LtF_yYW'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'demande' => ['privates', '.errored..service_locator.LtF_yYW.App\\Entity\\Demande', NULL, 'Cannot autowire service ".service_locator.LtF_yYW": it references class "App\\Entity\\Demande" but no such service exists.'],
            'demandeRepository' => ['privates', 'App\\Repository\\DemandeRepository', 'getDemandeRepositoryService', true],
            'installationRepository' => ['privates', 'App\\Repository\\InstallationRepository', 'getInstallationRepositoryService', true],
            'paiementRepository' => ['privates', 'App\\Repository\\PaiementRepository', 'getPaiementRepositoryService', true],
        ], [
            'demande' => 'App\\Entity\\Demande',
            'demandeRepository' => 'App\\Repository\\DemandeRepository',
            'installationRepository' => 'App\\Repository\\InstallationRepository',
            'paiementRepository' => 'App\\Repository\\PaiementRepository',
        ]);
    }
}
