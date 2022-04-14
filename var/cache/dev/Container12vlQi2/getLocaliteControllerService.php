<?php

namespace Container12vlQi2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLocaliteControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\LocaliteController' shared autowired service.
     *
     * @return \App\Controller\LocaliteController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'AbstractController.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'LocaliteController.php';

        $container->services['App\\Controller\\LocaliteController'] = $instance = new \App\Controller\LocaliteController();

        $instance->setContainer(($container->privates['.service_locator.jIxfAsi'] ?? $container->load('get_ServiceLocator_JIxfAsiService'))->withContext('App\\Controller\\LocaliteController', $container));

        return $instance;
    }
}
