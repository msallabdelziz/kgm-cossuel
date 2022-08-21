<?php

namespace Symfony\Config\BazingaGeocoder\ProvidersConfig;

require_once __DIR__.\DIRECTORY_SEPARATOR.'PluginConfig'.\DIRECTORY_SEPARATOR.'ReferenceConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class PluginConfig 
{
    private $reference;
    private $_usedProperties = [];

    /**
     * @return \Symfony\Config\BazingaGeocoder\ProvidersConfig\PluginConfig\ReferenceConfig|$this
     */
    public function reference(mixed $value = []): \Symfony\Config\BazingaGeocoder\ProvidersConfig\PluginConfig\ReferenceConfig|static
    {
        if (!\is_array($value)) {
            $this->_usedProperties['reference'] = true;
            $this->reference = $value;

            return $this;
        }

        if (!$this->reference instanceof \Symfony\Config\BazingaGeocoder\ProvidersConfig\PluginConfig\ReferenceConfig) {
            $this->_usedProperties['reference'] = true;
            $this->reference = new \Symfony\Config\BazingaGeocoder\ProvidersConfig\PluginConfig\ReferenceConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "reference()" has already been initialized. You cannot pass values the second time you call reference().');
        }

        return $this->reference;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('reference', $value)) {
            $this->_usedProperties['reference'] = true;
            $this->reference = \is_array($value['reference']) ? new \Symfony\Config\BazingaGeocoder\ProvidersConfig\PluginConfig\ReferenceConfig($value['reference']) : $value['reference'];
            unset($value['reference']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['reference'])) {
            $output['reference'] = $this->reference instanceof \Symfony\Config\BazingaGeocoder\ProvidersConfig\PluginConfig\ReferenceConfig ? $this->reference->toArray() : $this->reference;
        }

        return $output;
    }

}
