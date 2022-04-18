<?php

namespace ContainerQuesjqN;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_3fv_C89Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.3fv.C89' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.3fv.C89'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'agenceRepository' => ['privates', 'App\\Repository\\AgenceRepository', 'getAgenceRepositoryService', true],
        ], [
            'agenceRepository' => 'App\\Repository\\AgenceRepository',
        ]);
    }
}
