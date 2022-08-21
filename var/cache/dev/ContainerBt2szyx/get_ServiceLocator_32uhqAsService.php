<?php

namespace ContainerBt2szyx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_32uhqAsService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.32uhqAs' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.32uhqAs'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'natureBatiment' => ['privates', '.errored..service_locator.32uhqAs.App\\Entity\\NatureBatiment', NULL, 'Cannot autowire service ".service_locator.32uhqAs": it references class "App\\Entity\\NatureBatiment" but no such service exists.'],
        ], [
            'natureBatiment' => 'App\\Entity\\NatureBatiment',
        ]);
    }
}
