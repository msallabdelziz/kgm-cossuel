<?php

namespace ContainerE86xryi;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAttestationConfRepositoryService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Repository\AttestationConfRepository' shared autowired service.
     *
     * @return \App\Repository\AttestationConfRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Repository\\AttestationConfRepository'] = new \App\Repository\AttestationConfRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
