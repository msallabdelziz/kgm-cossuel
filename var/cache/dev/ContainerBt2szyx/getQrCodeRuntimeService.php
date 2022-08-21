<?php

namespace ContainerBt2szyx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getQrCodeRuntimeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'Endroid\QrCodeBundle\Twig\QrCodeRuntime' shared autowired service.
     *
     * @return \Endroid\QrCodeBundle\Twig\QrCodeRuntime
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/twig/twig/src/Extension/RuntimeExtensionInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/endroid/qr-code-bundle/src/Twig/QrCodeRuntime.php';

        return $container->privates['Endroid\\QrCodeBundle\\Twig\\QrCodeRuntime'] = new \Endroid\QrCodeBundle\Twig\QrCodeRuntime(($container->privates['Endroid\\QrCode\\Builder\\BuilderRegistry'] ?? $container->load('getBuilderRegistryService')), ($container->services['router'] ?? $container->getRouterService()));
    }
}
