<?php

namespace ContainerE86xryi;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDepartementRepositoryService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Repository\DepartementRepository' shared autowired service.
     *
     * @return \App\Repository\DepartementRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Repository\\DepartementRepository'] = new \App\Repository\DepartementRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}