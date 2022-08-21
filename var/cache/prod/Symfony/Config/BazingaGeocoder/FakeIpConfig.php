<?php

namespace Symfony\Config\BazingaGeocoder;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class FakeIpConfig 
{
    private $enabled;
    private $localIp;
    private $ip;
    private $useFaker;
    private $_usedProperties = [];

    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function enabled($value): static
    {
        $this->_usedProperties['enabled'] = true;
        $this->enabled = $value;

        return $this;
    }

    /**
     * @default '127.0.0.1'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function localIp($value): static
    {
        $this->_usedProperties['localIp'] = true;
        $this->localIp = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function ip($value): static
    {
        $this->_usedProperties['ip'] = true;
        $this->ip = $value;

        return $this;
    }

    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function useFaker($value): static
    {
        $this->_usedProperties['useFaker'] = true;
        $this->useFaker = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('enabled', $value)) {
            $this->_usedProperties['enabled'] = true;
            $this->enabled = $value['enabled'];
            unset($value['enabled']);
        }

        if (array_key_exists('local_ip', $value)) {
            $this->_usedProperties['localIp'] = true;
            $this->localIp = $value['local_ip'];
            unset($value['local_ip']);
        }

        if (array_key_exists('ip', $value)) {
            $this->_usedProperties['ip'] = true;
            $this->ip = $value['ip'];
            unset($value['ip']);
        }

        if (array_key_exists('use_faker', $value)) {
            $this->_usedProperties['useFaker'] = true;
            $this->useFaker = $value['use_faker'];
            unset($value['use_faker']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['enabled'])) {
            $output['enabled'] = $this->enabled;
        }
        if (isset($this->_usedProperties['localIp'])) {
            $output['local_ip'] = $this->localIp;
        }
        if (isset($this->_usedProperties['ip'])) {
            $output['ip'] = $this->ip;
        }
        if (isset($this->_usedProperties['useFaker'])) {
            $output['use_faker'] = $this->useFaker;
        }

        return $output;
    }

}
