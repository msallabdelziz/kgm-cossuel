<?php

namespace Proxies\__CG__\App\Entity;


/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Remboursement extends \App\Entity\Remboursement implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Remboursement' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Remboursement' . "\0" . 'dateDemande', '' . "\0" . 'App\\Entity\\Remboursement' . "\0" . 'dateValidation', '' . "\0" . 'App\\Entity\\Remboursement' . "\0" . 'montant', '' . "\0" . 'App\\Entity\\Remboursement' . "\0" . 'motif', '' . "\0" . 'App\\Entity\\Remboursement' . "\0" . 'motifRejet', '' . "\0" . 'App\\Entity\\Remboursement' . "\0" . 'valide', '' . "\0" . 'App\\Entity\\Remboursement' . "\0" . 'rejete', '' . "\0" . 'App\\Entity\\Remboursement' . "\0" . 'paiement', '' . "\0" . 'App\\Entity\\Remboursement' . "\0" . 'created_at', '' . "\0" . 'App\\Entity\\Remboursement' . "\0" . 'created_by', '' . "\0" . 'App\\Entity\\Remboursement' . "\0" . 'updated_at', '' . "\0" . 'App\\Entity\\Remboursement' . "\0" . 'updated_by'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Remboursement' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Remboursement' . "\0" . 'dateDemande', '' . "\0" . 'App\\Entity\\Remboursement' . "\0" . 'dateValidation', '' . "\0" . 'App\\Entity\\Remboursement' . "\0" . 'montant', '' . "\0" . 'App\\Entity\\Remboursement' . "\0" . 'motif', '' . "\0" . 'App\\Entity\\Remboursement' . "\0" . 'motifRejet', '' . "\0" . 'App\\Entity\\Remboursement' . "\0" . 'valide', '' . "\0" . 'App\\Entity\\Remboursement' . "\0" . 'rejete', '' . "\0" . 'App\\Entity\\Remboursement' . "\0" . 'paiement', '' . "\0" . 'App\\Entity\\Remboursement' . "\0" . 'created_at', '' . "\0" . 'App\\Entity\\Remboursement' . "\0" . 'created_by', '' . "\0" . 'App\\Entity\\Remboursement' . "\0" . 'updated_at', '' . "\0" . 'App\\Entity\\Remboursement' . "\0" . 'updated_by'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Remboursement $proxy) {
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
    public function getMotif(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMotif', []);

        return parent::getMotif();
    }

    /**
     * {@inheritDoc}
     */
    public function setMotif(string $motif): \App\Entity\Remboursement
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMotif', [$motif]);

        return parent::setMotif($motif);
    }

    /**
     * {@inheritDoc}
     */
    public function getMotifRejet(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMotifRejet', []);

        return parent::getMotifRejet();
    }

    /**
     * {@inheritDoc}
     */
    public function setMotifRejet(string $motifRejet): \App\Entity\Remboursement
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMotifRejet', [$motifRejet]);

        return parent::setMotifRejet($motifRejet);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateDemande(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateDemande', []);

        return parent::getDateDemande();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateDemande(\DateTimeInterface $dateDemande): \App\Entity\Remboursement
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateDemande', [$dateDemande]);

        return parent::setDateDemande($dateDemande);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateValidation(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateValidation', []);

        return parent::getDateValidation();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateValidation(?\DateTimeInterface $dateValidation): \App\Entity\Remboursement
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateValidation', [$dateValidation]);

        return parent::setDateValidation($dateValidation);
    }

    /**
     * {@inheritDoc}
     */
    public function getMontant(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMontant', []);

        return parent::getMontant();
    }

    /**
     * {@inheritDoc}
     */
    public function setMontant(int $montant): \App\Entity\Remboursement
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMontant', [$montant]);

        return parent::setMontant($montant);
    }

    /**
     * {@inheritDoc}
     */
    public function getValide(): ?bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getValide', []);

        return parent::getValide();
    }

    /**
     * {@inheritDoc}
     */
    public function setValide(bool $valide): \App\Entity\Remboursement
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setValide', [$valide]);

        return parent::setValide($valide);
    }

    /**
     * {@inheritDoc}
     */
    public function getRejete(): ?bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRejete', []);

        return parent::getRejete();
    }

    /**
     * {@inheritDoc}
     */
    public function setRejete(bool $rejet): \App\Entity\Remboursement
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRejete', [$rejet]);

        return parent::setRejete($rejet);
    }

    /**
     * {@inheritDoc}
     */
    public function getPaiement(): ?\App\Entity\Paiement
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPaiement', []);

        return parent::getPaiement();
    }

    /**
     * {@inheritDoc}
     */
    public function setPaiement(?\App\Entity\Paiement $paiement): \App\Entity\Remboursement
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPaiement', [$paiement]);

        return parent::setPaiement($paiement);
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
    public function setCreatedAt(\DateTimeImmutable $created_at): \App\Entity\Remboursement
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
    public function setUpdatedAt(\DateTimeImmutable $updated_at): \App\Entity\Remboursement
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
    public function setCreatedby(string $created_by): \App\Entity\Remboursement
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
    public function setUpdatedBy(string $updated_by): \App\Entity\Remboursement
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUpdatedBy', [$updated_by]);

        return parent::setUpdatedBy($updated_by);
    }

}