<?php

namespace ContainerBt2szyx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_OT4jopaService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.oT4jopa' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.oT4jopa'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'agenceRepository' => ['privates', 'App\\Repository\\AgenceRepository', 'getAgenceRepositoryService', true],
            'agentRepository' => ['privates', 'App\\Repository\\AgentRepository', 'getAgentRepositoryService', true],
            'pgn' => ['services', 'knp_paginator', 'getKnpPaginatorService', true],
            'profilRepository' => ['privates', 'App\\Repository\\ProfilRepository', 'getProfilRepositoryService', true],
        ], [
            'agenceRepository' => 'App\\Repository\\AgenceRepository',
            'agentRepository' => 'App\\Repository\\AgentRepository',
            'pgn' => '?',
            'profilRepository' => 'App\\Repository\\ProfilRepository',
        ]);
    }
}
