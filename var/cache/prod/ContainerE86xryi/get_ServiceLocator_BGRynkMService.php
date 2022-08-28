<?php

namespace ContainerE86xryi;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_BGRynkMService extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.BGRynkM' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.BGRynkM'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'natureBatimentRepository' => ['privates', 'App\\Repository\\NatureBatimentRepository', 'getNatureBatimentRepositoryService', true],
        ], [
            'natureBatimentRepository' => 'App\\Repository\\NatureBatimentRepository',
        ]);
    }
}