<?php

namespace ContainerQuesjqN;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getRegionFormTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\RegionFormType' shared autowired service.
     *
     * @return \App\Form\RegionFormType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/RegionFormType.php';

        return $container->privates['App\\Form\\RegionFormType'] = new \App\Form\RegionFormType();
    }
}