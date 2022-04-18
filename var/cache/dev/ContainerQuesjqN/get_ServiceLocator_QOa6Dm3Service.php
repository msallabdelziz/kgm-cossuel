<?php

namespace ContainerQuesjqN;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_QOa6Dm3Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.qOa6Dm3' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.qOa6Dm3'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'electricienRepository' => ['privates', 'App\\Repository\\ElectricienRepository', 'getElectricienRepositoryService', true],
        ], [
            'electricienRepository' => 'App\\Repository\\ElectricienRepository',
        ]);
    }
}