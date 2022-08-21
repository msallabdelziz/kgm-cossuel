<?php

namespace ContainerE86xryi;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_799rl8kService extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.799rl8k' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.799rl8k'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'agent' => ['privates', '.errored..service_locator.799rl8k.App\\Entity\\Agent', NULL, 'Cannot autowire service ".service_locator.799rl8k": it references class "App\\Entity\\Agent" but no such service exists.'],
            'agentRepository' => ['privates', 'App\\Repository\\AgentRepository', 'getAgentRepositoryService', true],
            'doctrine' => ['services', 'doctrine', 'getDoctrineService', false],
        ], [
            'agent' => 'App\\Entity\\Agent',
            'agentRepository' => 'App\\Repository\\AgentRepository',
            'doctrine' => '?',
        ]);
    }
}
