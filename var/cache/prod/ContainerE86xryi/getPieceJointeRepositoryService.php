<?php

namespace ContainerE86xryi;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPieceJointeRepositoryService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Repository\PieceJointeRepository' shared autowired service.
     *
     * @return \App\Repository\PieceJointeRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Repository\\PieceJointeRepository'] = new \App\Repository\PieceJointeRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}