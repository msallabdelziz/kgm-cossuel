<?php

namespace ContainerE86xryi;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAgenceControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'App\Controller\AgenceController' shared autowired service.
     *
     * @return \App\Controller\AgenceController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\AgenceController'] = $instance = new \App\Controller\AgenceController();

        $instance->setContainer(($container->privates['.service_locator.jIxfAsi'] ?? $container->load('get_ServiceLocator_JIxfAsiService'))->withContext('App\\Controller\\AgenceController', $container));

        return $instance;
    }
}
