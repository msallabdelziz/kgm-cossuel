<?php

namespace ContainerJVmEO8H;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_WuUWbbLService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.WuUWbbL' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.WuUWbbL'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'departementRepository' => ['privates', 'App\\Repository\\DepartementRepository', 'getDepartementRepositoryService', true],
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
        ], [
            'departementRepository' => 'App\\Repository\\DepartementRepository',
            'entityManager' => '?',
        ]);
    }
}
