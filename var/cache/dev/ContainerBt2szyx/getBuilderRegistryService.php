<?php

namespace ContainerBt2szyx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getBuilderRegistryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'Endroid\QrCode\Builder\BuilderRegistry' shared autowired service.
     *
     * @return \Endroid\QrCode\Builder\BuilderRegistry
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/endroid/qr-code/src/Builder/BuilderRegistryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/endroid/qr-code/src/Builder/BuilderRegistry.php';
        include_once \dirname(__DIR__, 4).'/vendor/endroid/qr-code/src/Builder/BuilderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/endroid/qr-code/src/Builder/Builder.php';
        include_once \dirname(__DIR__, 4).'/vendor/endroid/qr-code/src/Encoding/EncodingInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/endroid/qr-code/src/Encoding/Encoding.php';
        include_once \dirname(__DIR__, 4).'/vendor/endroid/qr-code/src/ErrorCorrectionLevel/ErrorCorrectionLevelInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/endroid/qr-code/src/ErrorCorrectionLevel/ErrorCorrectionLevelLow.php';
        include_once \dirname(__DIR__, 4).'/vendor/endroid/qr-code/src/RoundBlockSizeMode/RoundBlockSizeModeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/endroid/qr-code/src/RoundBlockSizeMode/RoundBlockSizeModeMargin.php';
        include_once \dirname(__DIR__, 4).'/vendor/endroid/qr-code/src/Color/ColorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/endroid/qr-code/src/Color/Color.php';
        include_once \dirname(__DIR__, 4).'/vendor/endroid/qr-code/src/Writer/WriterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/endroid/qr-code/src/Writer/ValidatingWriterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/endroid/qr-code/src/Writer/PngWriter.php';

        $container->privates['Endroid\\QrCode\\Builder\\BuilderRegistry'] = $instance = new \Endroid\QrCode\Builder\BuilderRegistry();

        $a = new \Endroid\QrCode\Builder\Builder();

        $b = ($container->privates['Endroid\\QrCode\\Writer\\PngWriter'] ?? ($container->privates['Endroid\\QrCode\\Writer\\PngWriter'] = new \Endroid\QrCode\Writer\PngWriter()));

        $a->writer($b);
        $a->size(200);
        $a->margin(10);
        $a->encoding(new \Endroid\QrCode\Encoding\Encoding('UTF-8'));
        $a->errorCorrectionLevel(new \Endroid\QrCode\ErrorCorrectionLevel\ErrorCorrectionLevelLow());
        $a->roundBlockSizeMode(new \Endroid\QrCode\RoundBlockSizeMode\RoundBlockSizeModeMargin());
        $a->validateResult(false);
        $c = new \Endroid\QrCode\Builder\Builder();
        $c->writer($b);
        $c->size(200);
        $c->foregroundColor(new \Endroid\QrCode\Color\Color(255, 228, 54));
        $c->margin(10);
        $c->encoding(new \Endroid\QrCode\Encoding\Encoding('UTF-8'));
        $c->errorCorrectionLevel(new \Endroid\QrCode\ErrorCorrectionLevel\ErrorCorrectionLevelLow());
        $c->roundBlockSizeMode(new \Endroid\QrCode\RoundBlockSizeMode\RoundBlockSizeModeMargin());
        $c->validateResult(false);
        $d = new \Endroid\QrCode\Builder\Builder();
        $d->writer($b);
        $d->size(200);
        $d->foregroundColor(new \Endroid\QrCode\Color\Color(119, 181, 254));
        $d->margin(10);
        $d->encoding(new \Endroid\QrCode\Encoding\Encoding('UTF-8'));
        $d->errorCorrectionLevel(new \Endroid\QrCode\ErrorCorrectionLevel\ErrorCorrectionLevelLow());
        $d->roundBlockSizeMode(new \Endroid\QrCode\RoundBlockSizeMode\RoundBlockSizeModeMargin());
        $d->validateResult(false);

        $instance->addBuilder('default', $a);
        $instance->addBuilder('prof', $c);
        $instance->addBuilder('dom', $d);

        return $instance;
    }
}