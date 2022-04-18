<?php

namespace ContainerQuesjqN;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getResetPasswordControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\ResetPasswordController' shared autowired service.
     *
     * @return \App\Controller\ResetPasswordController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfonycasts/reset-password-bundle/src/Controller/ResetPasswordControllerTrait.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/ResetPasswordController.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfonycasts/reset-password-bundle/src/ResetPasswordHelperInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfonycasts/reset-password-bundle/src/ResetPasswordHelper.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfonycasts/reset-password-bundle/src/Generator/ResetPasswordTokenGenerator.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfonycasts/reset-password-bundle/src/Generator/ResetPasswordRandomGenerator.php';

        $container->services['App\\Controller\\ResetPasswordController'] = $instance = new \App\Controller\ResetPasswordController(new \SymfonyCasts\Bundle\ResetPassword\ResetPasswordHelper(new \SymfonyCasts\Bundle\ResetPassword\Generator\ResetPasswordTokenGenerator($container->getEnv('APP_SECRET'), new \SymfonyCasts\Bundle\ResetPassword\Generator\ResetPasswordRandomGenerator()), ($container->privates['symfonycasts.reset_password.cleaner'] ?? $container->load('getSymfonycasts_ResetPassword_CleanerService')), ($container->privates['App\\Repository\\ResetPasswordRequestRepository'] ?? $container->load('getResetPasswordRequestRepositoryService')), 3600, 3600), ($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()));

        $instance->setContainer(($container->privates['.service_locator.l1ae.Qz'] ?? $container->load('get_ServiceLocator_L1ae_QzService'))->withContext('App\\Controller\\ResetPasswordController', $container));

        return $instance;
    }
}
