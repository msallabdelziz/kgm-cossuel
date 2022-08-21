<?php

namespace ContainerE86xryi;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getEndroidQrCode_DefaultBuilderService extends App_KernelProdContainer
{
    /*
     * Gets the public 'endroid_qr_code.default_builder' shared autowired service.
     *
     * @return \Endroid\QrCode\Builder\Builder
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['endroid_qr_code.default_builder'] = $instance = new \Endroid\QrCode\Builder\Builder();

        $instance->writer(($container->privates['Endroid\\QrCode\\Writer\\PngWriter'] ?? ($container->privates['Endroid\\QrCode\\Writer\\PngWriter'] = new \Endroid\QrCode\Writer\PngWriter())));
        $instance->size(200);
        $instance->margin(10);
        $instance->encoding(new \Endroid\QrCode\Encoding\Encoding('UTF-8'));
        $instance->errorCorrectionLevel(new \Endroid\QrCode\ErrorCorrectionLevel\ErrorCorrectionLevelLow());
        $instance->roundBlockSizeMode(new \Endroid\QrCode\RoundBlockSizeMode\RoundBlockSizeModeMargin());
        $instance->validateResult(false);

        return $instance;
    }
}
