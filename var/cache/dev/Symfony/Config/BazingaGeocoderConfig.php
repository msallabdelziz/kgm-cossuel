<?php

namespace Symfony\Config;

require_once __DIR__.\DIRECTORY_SEPARATOR.'BazingaGeocoder'.\DIRECTORY_SEPARATOR.'ProvidersConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'BazingaGeocoder'.\DIRECTORY_SEPARATOR.'ProfilingConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'BazingaGeocoder'.\DIRECTORY_SEPARATOR.'FakeIpConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class BazingaGeocoderConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $providers;
    private $profiling;
    private $fakeIp;
    private $_usedProperties = [];

    public function providers(string $name, array $value = []): \Symfony\Config\BazingaGeocoder\ProvidersConfig
    {
        if (!isset($this->providers[$name])) {
            $this->_usedProperties['providers'] = true;
            $this->providers[$name] = new \Symfony\Config\BazingaGeocoder\ProvidersConfig($value);
        } elseif (1 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "providers()" has already been initialized. You cannot pass values the second time you call providers().');
        }

        return $this->providers[$name];
    }

    public function profiling(array $value = []): \Symfony\Config\BazingaGeocoder\ProfilingConfig
    {
        if (null === $this->profiling) {
            $this->_usedProperties['profiling'] = true;
            $this->profiling = new \Symfony\Config\BazingaGeocoder\ProfilingConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "profiling()" has already been initialized. You cannot pass values the second time you call profiling().');
        }

        return $this->profiling;
    }

    /**
     * @return \Symfony\Config\BazingaGeocoder\FakeIpConfig|$this
     */
    public function fakeIp(mixed $value = []): \Symfony\Config\BazingaGeocoder\FakeIpConfig|static
    {
        if (!\is_array($value)) {
            $this->_usedProperties['fakeIp'] = true;
            $this->fakeIp = $value;

            return $this;
        }

        if (!$this->fakeIp instanceof \Symfony\Config\BazingaGeocoder\FakeIpConfig) {
            $this->_usedProperties['fakeIp'] = true;
            $this->fakeIp = new \Symfony\Config\BazingaGeocoder\FakeIpConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "fakeIp()" has already been initialized. You cannot pass values the second time you call fakeIp().');
        }

        return $this->fakeIp;
    }

    public function getExtensionAlias(): string
    {
        return 'bazinga_geocoder';
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('providers', $value)) {
            $this->_usedProperties['providers'] = true;
            $this->providers = array_map(function ($v) { return new \Symfony\Config\BazingaGeocoder\ProvidersConfig($v); }, $value['providers']);
            unset($value['providers']);
        }

        if (array_key_exists('profiling', $value)) {
            $this->_usedProperties['profiling'] = true;
            $this->profiling = new \Symfony\Config\BazingaGeocoder\ProfilingConfig($value['profiling']);
            unset($value['profiling']);
        }

        if (array_key_exists('fake_ip', $value)) {
            $this->_usedProperties['fakeIp'] = true;
            $this->fakeIp = \is_array($value['fake_ip']) ? new \Symfony\Config\BazingaGeocoder\FakeIpConfig($value['fake_ip']) : $value['fake_ip'];
            unset($value['fake_ip']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['providers'])) {
            $output['providers'] = array_map(function ($v) { return $v->toArray(); }, $this->providers);
        }
        if (isset($this->_usedProperties['profiling'])) {
            $output['profiling'] = $this->profiling->toArray();
        }
        if (isset($this->_usedProperties['fakeIp'])) {
            $output['fake_ip'] = $this->fakeIp instanceof \Symfony\Config\BazingaGeocoder\FakeIpConfig ? $this->fakeIp->toArray() : $this->fakeIp;
        }

        return $output;
    }

}
