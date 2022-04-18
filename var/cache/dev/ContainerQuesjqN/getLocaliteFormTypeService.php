<?php

namespace ContainerQuesjqN;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLocaliteFormTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\LocaliteFormType' shared autowired service.
     *
     * @return \App\Form\LocaliteFormType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/LocaliteFormType.php';

        return $container->privates['App\\Form\\LocaliteFormType'] = new \App\Form\LocaliteFormType();
    }
}