<?php

namespace ContainerE86xryi;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAgentControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'App\Controller\AgentController' shared autowired service.
     *
     * @return \App\Controller\AgentController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\AgentController'] = $instance = new \App\Controller\AgentController();

        $instance->setContainer(($container->privates['.service_locator.jIxfAsi'] ?? $container->load('get_ServiceLocator_JIxfAsiService'))->withContext('App\\Controller\\AgentController', $container));

        return $instance;
    }
}
