<?php

namespace ContainerBt2szyx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_6SsNP_Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.6_SsNP.' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.6_SsNP.'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'doctrine' => ['services', 'doctrine', 'getDoctrineService', false],
            'electricien' => ['privates', '.errored..service_locator.6_SsNP..App\\Entity\\Electricien', NULL, 'Cannot autowire service ".service_locator.6_SsNP.": it references class "App\\Entity\\Electricien" but no such service exists.'],
            'electricienRepository' => ['privates', 'App\\Repository\\ElectricienRepository', 'getElectricienRepositoryService', true],
        ], [
            'doctrine' => '?',
            'electricien' => 'App\\Entity\\Electricien',
            'electricienRepository' => 'App\\Repository\\ElectricienRepository',
        ]);
    }
}
