<?php

namespace ContainerE86xryi;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_X1Q0ly0Service extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.X1Q0ly0' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.X1Q0ly0'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'doctrine' => ['services', 'doctrine', 'getDoctrineService', false],
            'remboursement' => ['privates', '.errored..service_locator.X1Q0ly0.App\\Entity\\Remboursement', NULL, 'Cannot autowire service ".service_locator.X1Q0ly0": it references class "App\\Entity\\Remboursement" but no such service exists.'],
            'tools' => ['privates', 'App\\Services\\Tools', 'getToolsService', true],
        ], [
            'doctrine' => '?',
            'remboursement' => 'App\\Entity\\Remboursement',
            'tools' => 'App\\Services\\Tools',
        ]);
    }
}