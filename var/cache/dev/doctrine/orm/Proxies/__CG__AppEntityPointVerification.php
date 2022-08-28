<?php

namespace Proxies\__CG__\App\Entity;


/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class PointVerification extends \App\Entity\PointVerification implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\PointVerification' . "\0" . 'id', '' . "\0" . 'App\\Entity\\PointVerification' . "\0" . 'numero', '' . "\0" . 'App\\Entity\\PointVerification' . "\0" . 'objetVerification', '' . "\0" . 'App\\Entity\\PointVerification' . "\0" . 'libelleConclusion1', '' . "\0" . 'App\\Entity\\PointVerification' . "\0" . 'libelleConclusion2', '' . "\0" . 'App\\Entity\\PointVerification' . "\0" . 'rubrique', '' . "\0" . 'App\\Entity\\PointVerification' . "\0" . 'pointNonconf'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\PointVerification' . "\0" . 'id', '' . "\0" . 'App\\Entity\\PointVerification' . "\0" . 'numero', '' . "\0" . 'App\\Entity\\PointVerification' . "\0" . 'objetVerification', '' . "\0" . 'App\\Entity\\PointVerification' . "\0" . 'libelleConclusion1', '' . "\0" . 'App\\Entity\\PointVerification' . "\0" . 'libelleConclusion2', '' . "\0" . 'App\\Entity\\PointVerification' . "\0" . 'rubrique', '' . "\0" . 'App\\Entity\\PointVerification' . "\0" . 'pointNonconf'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (PointVerification $proxy) {
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
    public function getNumero(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNumero', []);

        return parent::getNumero();
    }

    /**
     * {@inheritDoc}
     */
    public function setNumero(int $numero): \App\Entity\PointVerification
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNumero', [$numero]);

        return parent::setNumero($numero);
    }

    /**
     * {@inheritDoc}
     */
    public function getObjetVerification(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getObjetVerification', []);

        return parent::getObjetVerification();
    }

    /**
     * {@inheritDoc}
     */
    public function setObjetVerification(string $objetVerification): \App\Entity\PointVerification
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setObjetVerification', [$objetVerification]);

        return parent::setObjetVerification($objetVerification);
    }

    /**
     * {@inheritDoc}
     */
    public function getLibelleConclusion1(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLibelleConclusion1', []);

        return parent::getLibelleConclusion1();
    }

    /**
     * {@inheritDoc}
     */
    public function setLibelleConclusion1(string $libelleConclusion1): \App\Entity\PointVerification
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLibelleConclusion1', [$libelleConclusion1]);

        return parent::setLibelleConclusion1($libelleConclusion1);
    }

    /**
     * {@inheritDoc}
     */
    public function getLibelleConclusion2(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLibelleConclusion2', []);

        return parent::getLibelleConclusion2();
    }

    /**
     * {@inheritDoc}
     */
    public function setLibelleConclusion2(string $libelleConclusion2): \App\Entity\PointVerification
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLibelleConclusion2', [$libelleConclusion2]);

        return parent::setLibelleConclusion2($libelleConclusion2);
    }

    /**
     * {@inheritDoc}
     */
    public function getRubrique(): ?\App\Entity\Rubrique
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRubrique', []);

        return parent::getRubrique();
    }

    /**
     * {@inheritDoc}
     */
    public function setRubrique(?\App\Entity\Rubrique $rubrique): \App\Entity\PointVerification
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRubrique', [$rubrique]);

        return parent::setRubrique($rubrique);
    }

    /**
     * {@inheritDoc}
     */
    public function getPointNonconf(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPointNonconf', []);

        return parent::getPointNonconf();
    }

    /**
     * {@inheritDoc}
     */
    public function addPointNonconf(\App\Entity\PointNonconf $pointNonconf): \App\Entity\PointVerification
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addPointNonconf', [$pointNonconf]);

        return parent::addPointNonconf($pointNonconf);
    }

    /**
     * {@inheritDoc}
     */
    public function removePointNonconf(\App\Entity\PointNonconf $pointNonconf): \App\Entity\PointVerification
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removePointNonconf', [$pointNonconf]);

        return parent::removePointNonconf($pointNonconf);
    }

    /**
     * {@inheritDoc}
     */
    public function __toString(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', []);

        return parent::__toString();
    }

}
