<?php

namespace ContainerE86xryi;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getRapportRepositoryService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Repository\RapportRepository' shared autowired service.
     *
     * @return \App\Repository\RapportRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Repository\\RapportRepository'] = new \App\Repository\RapportRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
