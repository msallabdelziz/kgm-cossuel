<?php

namespace ContainerE86xryi;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getProprietaireControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'App\Controller\ProprietaireController' shared autowired service.
     *
     * @return \App\Controller\ProprietaireController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\ProprietaireController'] = $instance = new \App\Controller\ProprietaireController();

        $instance->setContainer(($container->privates['.service_locator.jIxfAsi'] ?? $container->load('get_ServiceLocator_JIxfAsiService'))->withContext('App\\Controller\\ProprietaireController', $container));

        return $instance;
    }
}
