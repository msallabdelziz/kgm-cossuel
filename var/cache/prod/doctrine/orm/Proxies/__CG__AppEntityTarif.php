<?php

namespace Proxies\__CG__\App\Entity;


/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Tarif extends \App\Entity\Tarif implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array<string, null> properties to be lazy loaded, indexed by property name
     */
    public static $lazyPropertiesNames = array (
);

    /**
     * @var array<string, mixed> default values of properties to be lazy loaded, with keys being the property names
     *
     * @see \Doctrine\Common\Proxy\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array (
);



    public function __construct(?\Closure $initializer = null, ?\Closure $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Tarif' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Tarif' . "\0" . 'usages', '' . "\0" . 'App\\Entity\\Tarif' . "\0" . 'puissance', '' . "\0" . 'App\\Entity\\Tarif' . "\0" . 'cout1', '' . "\0" . 'App\\Entity\\Tarif' . "\0" . 'cout2', '' . "\0" . 'App\\Entity\\Tarif' . "\0" . 'created_at', '' . "\0" . 'App\\Entity\\Tarif' . "\0" . 'created_by', '' . "\0" . 'App\\Entity\\Tarif' . "\0" . 'updated_at', '' . "\0" . 'App\\Entity\\Tarif' . "\0" . 'updated_by'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Tarif' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Tarif' . "\0" . 'usages', '' . "\0" . 'App\\Entity\\Tarif' . "\0" . 'puissance', '' . "\0" . 'App\\Entity\\Tarif' . "\0" . 'cout1', '' . "\0" . 'App\\Entity\\Tarif' . "\0" . 'cout2', '' . "\0" . 'App\\Entity\\Tarif' . "\0" . 'created_at', '' . "\0" . 'App\\Entity\\Tarif' . "\0" . 'created_by', '' . "\0" . 'App\\Entity\\Tarif' . "\0" . 'updated_at', '' . "\0" . 'App\\Entity\\Tarif' . "\0" . 'updated_by'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Tarif $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy::$lazyPropertiesDefaults as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load(): void
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized(): bool
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized): void
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null): void
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer(): ?\Closure
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null): void
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner(): ?\Closure
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @deprecated no longer in use - generated code now relies on internal components rather than generated public API
     * @static
     */
    public function __getLazyProperties(): array
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId(): ?int
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function getUsages(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUsages', []);

        return parent::getUsages();
    }

    /**
     * {@inheritDoc}
     */
    public function setUsages(string $usages): \App\Entity\Tarif
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUsages', [$usages]);

        return parent::setUsages($usages);
    }

    /**
     * {@inheritDoc}
     */
    public function getPuissance(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPuissance', []);

        return parent::getPuissance();
    }

    /**
     * {@inheritDoc}
     */
    public function setPuissance(string $puissance): \App\Entity\Tarif
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPuissance', [$puissance]);

        return parent::setPuissance($puissance);
    }

    /**
     * {@inheritDoc}
     */
    public function getCout1(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCout1', []);

        return parent::getCout1();
    }

    /**
     * {@inheritDoc}
     */
    public function setCout1(int $cout1): \App\Entity\Tarif
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCout1', [$cout1]);

        return parent::setCout1($cout1);
    }

    /**
     * {@inheritDoc}
     */
    public function getCout2(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCout2', []);

        return parent::getCout2();
    }

    /**
     * {@inheritDoc}
     */
    public function setCout2(int $cout2): \App\Entity\Tarif
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCout2', [$cout2]);

        return parent::setCout2($cout2);
    }

    /**
     * {@inheritDoc}
     */
    public function __toString(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', []);

        return parent::__toString();
    }

    /**
     * {@inheritDoc}
     */
    public function getCreatedAt(): ?\DateTimeImmutable
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreatedAt', []);

        return parent::getCreatedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreatedAt(\DateTimeImmutable $created_at): \App\Entity\Tarif
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreatedAt', [$created_at]);

        return parent::setCreatedAt($created_at);
    }

    /**
     * {@inheritDoc}
     */
    public function getUpdatedAt(): ?\DateTimeImmutable
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUpdatedAt', []);

        return parent::getUpdatedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setUpdatedAt(\DateTimeImmutable $updated_at): \App\Entity\Tarif
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUpdatedAt', [$updated_at]);

        return parent::setUpdatedAt($updated_at);
    }

    /**
     * {@inheritDoc}
     */
    public function getCreatedby(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreatedby', []);

        return parent::getCreatedby();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreatedby(string $created_by): \App\Entity\Tarif
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreatedby', [$created_by]);

        return parent::setCreatedby($created_by);
    }

    /**
     * {@inheritDoc}
     */
    public function getUpdatedBy(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUpdatedBy', []);

        return parent::getUpdatedBy();
    }

    /**
     * {@inheritDoc}
     */
    public function setUpdatedBy(string $updated_by): \App\Entity\Tarif
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUpdatedBy', [$updated_by]);

        return parent::setUpdatedBy($updated_by);
    }

}
