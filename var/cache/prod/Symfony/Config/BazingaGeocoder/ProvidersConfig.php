<?php

namespace Symfony\Config\BazingaGeocoder;

require_once __DIR__.\DIRECTORY_SEPARATOR.'ProvidersConfig'.\DIRECTORY_SEPARATOR.'PluginConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class ProvidersConfig 
{
    private $factory;
    private $options;
    private $cache;
    private $cacheLifetime;
    private $cachePrecision;
    private $limit;
    private $locale;
    private $logger;
    private $aliases;
    private $plugins;
    private $_usedProperties = [];

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function factory($value): static
    {
        $this->_usedProperties['factory'] = true;
        $this->factory = $value;

        return $this;
    }

    /**
     * @default array (
    )
     * @param ParamConfigurator|mixed $value
     *
     * @return $this
     */
    public function options(mixed $value = array (
    )): static
    {
        $this->_usedProperties['options'] = true;
        $this->options = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function cache($value): static
    {
        $this->_usedProperties['cache'] = true;
        $this->cache = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function cacheLifetime($value): static
    {
        $this->_usedProperties['cacheLifetime'] = true;
        $this->cacheLifetime = $value;

        return $this;
    }

    /**
     * Precision of the coordinates to cache.
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function cachePrecision($value): static
    {
        $this->_usedProperties['cachePrecision'] = true;
        $this->cachePrecision = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function limit($value): static
    {
        $this->_usedProperties['limit'] = true;
        $this->limit = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function locale($value): static
    {
        $this->_usedProperties['locale'] = true;
        $this->locale = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function logger($value): static
    {
        $this->_usedProperties['logger'] = true;
        $this->logger = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|list<ParamConfigurator|mixed> $value
     *
     * @return $this
     */
    public function aliases(ParamConfigurator|array $value): static
    {
        $this->_usedProperties['aliases'] = true;
        $this->aliases = $value;

        return $this;
    }

    /**
     * @return \Symfony\Config\BazingaGeocoder\ProvidersConfig\PluginConfig|$this
     */
    public function plugin(mixed $value = []): \Symfony\Config\BazingaGeocoder\ProvidersConfig\PluginConfig|static
    {
        $this->_usedProperties['plugins'] = true;
        if (!\is_array($value)) {
            $this->plugins[] = $value;

            return $this;
        }

        return $this->plugins[] = new \Symfony\Config\BazingaGeocoder\ProvidersConfig\PluginConfig($value);
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('factory', $value)) {
            $this->_usedProperties['factory'] = true;
            $this->factory = $value['factory'];
            unset($value['factory']);
        }

        if (array_key_exists('options', $value)) {
            $this->_usedProperties['options'] = true;
            $this->options = $value['options'];
            unset($value['options']);
        }

        if (array_key_exists('cache', $value)) {
            $this->_usedProperties['cache'] = true;
            $this->cache = $value['cache'];
            unset($value['cache']);
        }

        if (array_key_exists('cache_lifetime', $value)) {
            $this->_usedProperties['cacheLifetime'] = true;
            $this->cacheLifetime = $value['cache_lifetime'];
            unset($value['cache_lifetime']);
        }

        if (array_key_exists('cache_precision', $value)) {
            $this->_usedProperties['cachePrecision'] = true;
            $this->cachePrecision = $value['cache_precision'];
            unset($value['cache_precision']);
        }

        if (array_key_exists('limit', $value)) {
            $this->_usedProperties['limit'] = true;
            $this->limit = $value['limit'];
            unset($value['limit']);
        }

        if (array_key_exists('locale', $value)) {
            $this->_usedProperties['locale'] = true;
            $this->locale = $value['locale'];
            unset($value['locale']);
        }

        if (array_key_exists('logger', $value)) {
            $this->_usedProperties['logger'] = true;
            $this->logger = $value['logger'];
            unset($value['logger']);
        }

        if (array_key_exists('aliases', $value)) {
            $this->_usedProperties['aliases'] = true;
            $this->aliases = $value['aliases'];
            unset($value['aliases']);
        }

        if (array_key_exists('plugins', $value)) {
            $this->_usedProperties['plugins'] = true;
            $this->plugins = array_map(function ($v) { return \is_array($v) ? new \Symfony\Config\BazingaGeocoder\ProvidersConfig\PluginConfig($v) : $v; }, $value['plugins']);
            unset($value['plugins']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['factory'])) {
            $output['factory'] = $this->factory;
        }
        if (isset($this->_usedProperties['options'])) {
            $output['options'] = $this->options;
        }
        if (isset($this->_usedProperties['cache'])) {
            $output['cache'] = $this->cache;
        }
        if (isset($this->_usedProperties['cacheLifetime'])) {
            $output['cache_lifetime'] = $this->cacheLifetime;
        }
        if (isset($this->_usedProperties['cachePrecision'])) {
            $output['cache_precision'] = $this->cachePrecision;
        }
        if (isset($this->_usedProperties['limit'])) {
            $output['limit'] = $this->limit;
        }
        if (isset($this->_usedProperties['locale'])) {
            $output['locale'] = $this->locale;
        }
        if (isset($this->_usedProperties['logger'])) {
            $output['logger'] = $this->logger;
        }
        if (isset($this->_usedProperties['aliases'])) {
            $output['aliases'] = $this->aliases;
        }
        if (isset($this->_usedProperties['plugins'])) {
            $output['plugins'] = array_map(function ($v) { return $v instanceof \Symfony\Config\BazingaGeocoder\ProvidersConfig\PluginConfig ? $v->toArray() : $v; }, $this->plugins);
        }

        return $output;
    }

}
