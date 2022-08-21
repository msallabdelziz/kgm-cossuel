<?php

namespace ContainerE86xryi;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_IihzYMTService extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.iihzYMT' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.iihzYMT'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'dossier' => ['privates', '.errored..service_locator.iihzYMT.App\\Entity\\Dossier', NULL, 'Cannot autowire service ".service_locator.iihzYMT": it references class "App\\Entity\\Dossier" but no such service exists.'],
            'knpSnappyPdf' => ['services', 'knp_snappy.pdf', 'getKnpSnappy_PdfService', true],
        ], [
            'dossier' => 'App\\Entity\\Dossier',
            'knpSnappyPdf' => '?',
        ]);
    }
}
