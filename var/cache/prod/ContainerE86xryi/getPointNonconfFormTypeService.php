<?php

namespace ContainerE86xryi;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPointNonconfFormTypeService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Form\PointNonconfFormType' shared autowired service.
     *
     * @return \App\Form\PointNonconfFormType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Form\\PointNonconfFormType'] = new \App\Form\PointNonconfFormType();
    }
}
