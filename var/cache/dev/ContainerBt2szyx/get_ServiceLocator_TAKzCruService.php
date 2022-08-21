<?php

namespace ContainerBt2szyx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_TAKzCruService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.tAKzCru' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.tAKzCru'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'installation' => ['privates', '.errored..service_locator.tAKzCru.App\\Entity\\Installation', NULL, 'Cannot autowire service ".service_locator.tAKzCru": it references class "App\\Entity\\Installation" but no such service exists.'],
            'knpSnappyPdf' => ['services', 'knp_snappy.pdf', 'getKnpSnappy_PdfService', true],
        ], [
            'installation' => 'App\\Entity\\Installation',
            'knpSnappyPdf' => '?',
        ]);
    }
}
