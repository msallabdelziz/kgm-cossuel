<?php

namespace ContainerE86xryi;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getKmlService extends App_KernelProdContainer
{
    /*
     * Gets the public 'Geocoder\Dumper\Kml' shared service.
     *
     * @return \Geocoder\Dumper\Kml
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Geocoder\\Dumper\\Kml'] = new \Geocoder\Dumper\Kml();
    }
}
