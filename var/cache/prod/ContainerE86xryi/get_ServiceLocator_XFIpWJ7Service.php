<?php

namespace ContainerE86xryi;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_XFIpWJ7Service extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.xFIpWJ7' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.xFIpWJ7'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'doctrine' => ['services', 'doctrine', 'getDoctrineService', false],
            'userPasswordHasher' => ['privates', 'security.user_password_hasher', 'getSecurity_UserPasswordHasherService', true],
            'utilisateur' => ['privates', '.errored..service_locator.xFIpWJ7.App\\Entity\\Utilisateur', NULL, 'Cannot autowire service ".service_locator.xFIpWJ7": it references class "App\\Entity\\Utilisateur" but no such service exists.'],
            'utilisateurRepository' => ['privates', 'App\\Repository\\UtilisateurRepository', 'getUtilisateurRepositoryService', true],
        ], [
            'doctrine' => '?',
            'userPasswordHasher' => '?',
            'utilisateur' => 'App\\Entity\\Utilisateur',
            'utilisateurRepository' => 'App\\Repository\\UtilisateurRepository',
        ]);
    }
}
