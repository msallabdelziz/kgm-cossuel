<?php

namespace ContainerE86xryi;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getElectricienTypeService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Form\ElectricienType' shared autowired service.
     *
     * @return \App\Form\ElectricienType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Form\\ElectricienType'] = new \App\Form\ElectricienType();
    }
}
