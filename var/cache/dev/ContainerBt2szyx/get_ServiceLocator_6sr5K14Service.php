<?php

namespace ContainerBt2szyx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_6sr5K14Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.6sr5K14' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.6sr5K14'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'rubrique' => ['privates', '.errored..service_locator.6sr5K14.App\\Entity\\Rubrique', NULL, 'Cannot autowire service ".service_locator.6sr5K14": it references class "App\\Entity\\Rubrique" but no such service exists.'],
            'rubriqueRepository' => ['privates', 'App\\Repository\\RubriqueRepository', 'getRubriqueRepositoryService', true],
        ], [
            'rubrique' => 'App\\Entity\\Rubrique',
            'rubriqueRepository' => 'App\\Repository\\RubriqueRepository',
        ]);
    }
}
