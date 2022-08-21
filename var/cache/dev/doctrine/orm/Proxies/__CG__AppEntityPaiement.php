<?php

namespace Proxies\__CG__\App\Entity;


/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Paiement extends \App\Entity\Paiement implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Paiement' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Paiement' . "\0" . 'observation', '' . "\0" . 'App\\Entity\\Paiement' . "\0" . 'datePaiement', '' . "\0" . 'App\\Entity\\Paiement' . "\0" . 'dateSaisie', '' . "\0" . 'App\\Entity\\Paiement' . "\0" . 'mode', '' . "\0" . 'App\\Entity\\Paiement' . "\0" . 'reference', '' . "\0" . 'App\\Entity\\Paiement' . "\0" . 'etatRembousement', '' . "\0" . 'App\\Entity\\Paiement' . "\0" . 'paiementEffectue', '' . "\0" . 'App\\Entity\\Paiement' . "\0" . 'demande', '' . "\0" . 'App\\Entity\\Paiement' . "\0" . 'comptable', '' . "\0" . 'App\\Entity\\Paiement' . "\0" . 'remboursements', '' . "\0" . 'App\\Entity\\Paiement' . "\0" . 'created_at', '' . "\0" . 'App\\Entity\\Paiement' . "\0" . 'created_by', '' . "\0" . 'App\\Entity\\Paiement' . "\0" . 'updated_at', '' . "\0" . 'App\\Entity\\Paiement' . "\0" . 'updated_by'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Paiement' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Paiement' . "\0" . 'observation', '' . "\0" . 'App\\Entity\\Paiement' . "\0" . 'datePaiement', '' . "\0" . 'App\\Entity\\Paiement' . "\0" . 'dateSaisie', '' . "\0" . 'App\\Entity\\Paiement' . "\0" . 'mode', '' . "\0" . 'App\\Entity\\Paiement' . "\0" . 'reference', '' . "\0" . 'App\\Entity\\Paiement' . "\0" . 'etatRembousement', '' . "\0" . 'App\\Entity\\Paiement' . "\0" . 'paiementEffectue', '' . "\0" . 'App\\Entity\\Paiement' . "\0" . 'demande', '' . "\0" . 'App\\Entity\\Paiement' . "\0" . 'comptable', '' . "\0" . 'App\\Entity\\Paiement' . "\0" . 'remboursements', '' . "\0" . 'App\\Entity\\Paiement' . "\0" . 'created_at', '' . "\0" . 'App\\Entity\\Paiement' . "\0" . 'created_by', '' . "\0" . 'App\\Entity\\Paiement' . "\0" . 'updated_at', '' . "\0" . 'App\\Entity\\Paiement' . "\0" . 'updated_by'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Paiement $proxy) {
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
    public function getObservation(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getObservation', []);

        return parent::getObservation();
    }

    /**
     * {@inheritDoc}
     */
    public function setObservation(string $observation): \App\Entity\Paiement
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setObservation', [$observation]);

        return parent::setObservation($observation);
    }

    /**
     * {@inheritDoc}
     */
    public function getDatePaiement(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDatePaiement', []);

        return parent::getDatePaiement();
    }

    /**
     * {@inheritDoc}
     */
    public function setDatePaiement(\DateTimeInterface $datePaiement): \App\Entity\Paiement
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDatePaiement', [$datePaiement]);

        return parent::setDatePaiement($datePaiement);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateSaisie(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateSaisie', []);

        return parent::getDateSaisie();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateSaisie(\DateTimeInterface $dateSaisie): \App\Entity\Paiement
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateSaisie', [$dateSaisie]);

        return parent::setDateSaisie($dateSaisie);
    }

    /**
     * {@inheritDoc}
     */
    public function getMode(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMode', []);

        return parent::getMode();
    }

    /**
     * {@inheritDoc}
     */
    public function setMode(string $mode): \App\Entity\Paiement
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMode', [$mode]);

        return parent::setMode($mode);
    }

    /**
     * {@inheritDoc}
     */
    public function getReference(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getReference', []);

        return parent::getReference();
    }

    /**
     * {@inheritDoc}
     */
    public function setReference(string $reference): \App\Entity\Paiement
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setReference', [$reference]);

        return parent::setReference($reference);
    }

    /**
     * {@inheritDoc}
     */
    public function getEtatRembousement(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEtatRembousement', []);

        return parent::getEtatRembousement();
    }

    /**
     * {@inheritDoc}
     */
    public function setEtatRembousement(string $etatRembousement): \App\Entity\Paiement
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEtatRembousement', [$etatRembousement]);

        return parent::setEtatRembousement($etatRembousement);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateFacture(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateFacture', []);

        return parent::getDateFacture();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateFacture(\DateTimeInterface $dateFacture): \App\Entity\Paiement
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateFacture', [$dateFacture]);

        return parent::setDateFacture($dateFacture);
    }

    /**
     * {@inheritDoc}
     */
    public function getPaiementEffectue(): ?bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPaiementEffectue', []);

        return parent::getPaiementEffectue();
    }

    /**
     * {@inheritDoc}
     */
    public function setPaiementEffectue(bool $paiementEffectue): \App\Entity\Paiement
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPaiementEffectue', [$paiementEffectue]);

        return parent::setPaiementEffectue($paiementEffectue);
    }

    /**
     * {@inheritDoc}
     */
    public function getDemande(): ?\App\Entity\Demande
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDemande', []);

        return parent::getDemande();
    }

    /**
     * {@inheritDoc}
     */
    public function setDemande(?\App\Entity\Demande $demande): \App\Entity\Paiement
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDemande', [$demande]);

        return parent::setDemande($demande);
    }

    /**
     * {@inheritDoc}
     */
    public function getComptable(): ?\App\Entity\Agent
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getComptable', []);

        return parent::getComptable();
    }

    /**
     * {@inheritDoc}
     */
    public function setComptable(?\App\Entity\Agent $comptable): \App\Entity\Paiement
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setComptable', [$comptable]);

        return parent::setComptable($comptable);
    }

    /**
     * {@inheritDoc}
     */
    public function getRemboursement(): ?\App\Entity\Remboursement
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRemboursement', []);

        return parent::getRemboursement();
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
    public function getRemboursements(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRemboursements', []);

        return parent::getRemboursements();
    }

    /**
     * {@inheritDoc}
     */
    public function addRemboursement(\App\Entity\Remboursement $remboursement): \App\Entity\Paiement
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addRemboursement', [$remboursement]);

        return parent::addRemboursement($remboursement);
    }

    /**
     * {@inheritDoc}
     */
    public function removeRemboursement(\App\Entity\Remboursement $remboursement): \App\Entity\Paiement
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeRemboursement', [$remboursement]);

        return parent::removeRemboursement($remboursement);
    }

    /**
     * {@inheritDoc}
     */
    public function getTotalRembourse(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTotalRembourse', []);

        return parent::getTotalRembourse();
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
    public function setCreatedAt(\DateTimeImmutable $created_at): \App\Entity\Paiement
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
    public function setUpdatedAt(\DateTimeImmutable $updated_at): \App\Entity\Paiement
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
    public function setCreatedby(string $created_by): \App\Entity\Paiement
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
    public function setUpdatedBy(string $updated_by): \App\Entity\Paiement
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUpdatedBy', [$updated_by]);

        return parent::setUpdatedBy($updated_by);
    }

}
