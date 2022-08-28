<?php

namespace ContainerBt2szyx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getRubriqueFormTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\RubriqueFormType' shared autowired service.
     *
     * @return \App\Form\RubriqueFormType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/RubriqueFormType.php';

        return $container->privates['App\\Form\\RubriqueFormType'] = new \App\Form\RubriqueFormType();
    }
}