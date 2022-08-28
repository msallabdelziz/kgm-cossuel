<?php

namespace ContainerBt2szyx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getProprietaireControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\ProprietaireController' shared autowired service.
     *
     * @return \App\Controller\ProprietaireController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/ProprietaireController.php';

        $container->services['App\\Controller\\ProprietaireController'] = $instance = new \App\Controller\ProprietaireController();

        $instance->setContainer(($container->privates['.service_locator.jIxfAsi'] ?? $container->load('get_ServiceLocator_JIxfAsiService'))->withContext('App\\Controller\\ProprietaireController', $container));

        return $instance;
    }
}