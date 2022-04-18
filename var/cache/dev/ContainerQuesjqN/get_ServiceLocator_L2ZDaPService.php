<?php

namespace ContainerQuesjqN;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_L2ZDaPService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.L2_zDaP' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.L2_zDaP'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'electricienRepository' => ['privates', 'App\\Repository\\ElectricienRepository', 'getElectricienRepositoryService', true],
            'installationRepository' => ['privates', 'App\\Repository\\InstallationRepository', 'getInstallationRepositoryService', true],
        ], [
            'electricienRepository' => 'App\\Repository\\ElectricienRepository',
            'installationRepository' => 'App\\Repository\\InstallationRepository',
        ]);
    }
}
