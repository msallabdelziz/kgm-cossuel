<?php

namespace ContainerE86xryi;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_MazprRqService extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.mazprRq' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.mazprRq'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'agent' => ['privates', '.errored..service_locator.mazprRq.App\\Entity\\Agent', NULL, 'Cannot autowire service ".service_locator.mazprRq": it references class "App\\Entity\\Agent" but no such service exists.'],
            'agentRepository' => ['privates', 'App\\Repository\\AgentRepository', 'getAgentRepositoryService', true],
            'doctrine' => ['services', 'doctrine', 'getDoctrineService', false],
            'userPasswordHasher' => ['privates', 'security.user_password_hasher', 'getSecurity_UserPasswordHasherService', true],
        ], [
            'agent' => 'App\\Entity\\Agent',
            'agentRepository' => 'App\\Repository\\AgentRepository',
            'doctrine' => '?',
            'userPasswordHasher' => '?',
        ]);
    }
}