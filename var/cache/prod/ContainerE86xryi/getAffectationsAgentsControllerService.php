<?php

namespace ContainerE86xryi;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAffectationsAgentsControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'App\Controller\AffectationsAgentsController' shared autowired service.
     *
     * @return \App\Controller\AffectationsAgentsController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\AffectationsAgentsController'] = $instance = new \App\Controller\AffectationsAgentsController();

        $instance->setContainer(($container->privates['.service_locator.jIxfAsi'] ?? $container->load('get_ServiceLocator_JIxfAsiService'))->withContext('App\\Controller\\AffectationsAgentsController', $container));

        return $instance;
    }
}
