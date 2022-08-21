<?php

namespace Proxies\__CG__\App\Entity;


/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Proprietaire extends \App\Entity\Proprietaire implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Proprietaire' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Proprietaire' . "\0" . 'prenom', '' . "\0" . 'App\\Entity\\Proprietaire' . "\0" . 'nom', '' . "\0" . 'App\\Entity\\Proprietaire' . "\0" . 'adresse', '' . "\0" . 'App\\Entity\\Proprietaire' . "\0" . 'telephone', '' . "\0" . 'App\\Entity\\Proprietaire' . "\0" . 'email', '' . "\0" . 'App\\Entity\\Proprietaire' . "\0" . 'typePiece', '' . "\0" . 'App\\Entity\\Proprietaire' . "\0" . 'numPiece', '' . "\0" . 'App\\Entity\\Proprietaire' . "\0" . 'role', '' . "\0" . 'App\\Entity\\Proprietaire' . "\0" . 'localite', '' . "\0" . 'App\\Entity\\Proprietaire' . "\0" . 'installation', '' . "\0" . 'App\\Entity\\Proprietaire' . "\0" . 'created_at', '' . "\0" . 'App\\Entity\\Proprietaire' . "\0" . 'created_by', '' . "\0" . 'App\\Entity\\Proprietaire' . "\0" . 'updated_at', '' . "\0" . 'App\\Entity\\Proprietaire' . "\0" . 'updated_by'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Proprietaire' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Proprietaire' . "\0" . 'prenom', '' . "\0" . 'App\\Entity\\Proprietaire' . "\0" . 'nom', '' . "\0" . 'App\\Entity\\Proprietaire' . "\0" . 'adresse', '' . "\0" . 'App\\Entity\\Proprietaire' . "\0" . 'telephone', '' . "\0" . 'App\\Entity\\Proprietaire' . "\0" . 'email', '' . "\0" . 'App\\Entity\\Proprietaire' . "\0" . 'typePiece', '' . "\0" . 'App\\Entity\\Proprietaire' . "\0" . 'numPiece', '' . "\0" . 'App\\Entity\\Proprietaire' . "\0" . 'role', '' . "\0" . 'App\\Entity\\Proprietaire' . "\0" . 'localite', '' . "\0" . 'App\\Entity\\Proprietaire' . "\0" . 'installation', '' . "\0" . 'App\\Entity\\Proprietaire' . "\0" . 'created_at', '' . "\0" . 'App\\Entity\\Proprietaire' . "\0" . 'created_by', '' . "\0" . 'App\\Entity\\Proprietaire' . "\0" . 'updated_at', '' . "\0" . 'App\\Entity\\Proprietaire' . "\0" . 'updated_by'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Proprietaire $proxy) {
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
    public function setFromUtilisateur(\App\Entity\Utilisateur $utilisateur): \App\Entity\Proprietaire
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFromUtilisateur', [$utilisateur]);

        return parent::setFromUtilisateur($utilisateur);
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
    public function restId(): \App\Entity\Proprietaire
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'restId', []);

        return parent::restId();
    }

    /**
     * {@inheritDoc}
     */
    public function getPrenom(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrenom', []);

        return parent::getPrenom();
    }

    /**
     * {@inheritDoc}
     */
    public function setPrenom(string $prenom): \App\Entity\Proprietaire
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPrenom', [$prenom]);

        return parent::setPrenom($prenom);
    }

    /**
     * {@inheritDoc}
     */
    public function getNom(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNom', []);

        return parent::getNom();
    }

    /**
     * {@inheritDoc}
     */
    public function setNom(string $nom): \App\Entity\Proprietaire
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNom', [$nom]);

        return parent::setNom($nom);
    }

    /**
     * {@inheritDoc}
     */
    public function getAdresse(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAdresse', []);

        return parent::getAdresse();
    }

    /**
     * {@inheritDoc}
     */
    public function setAdresse(?string $adresse): \App\Entity\Proprietaire
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAdresse', [$adresse]);

        return parent::setAdresse($adresse);
    }

    /**
     * {@inheritDoc}
     */
    public function getTelephone(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTelephone', []);

        return parent::getTelephone();
    }

    /**
     * {@inheritDoc}
     */
    public function setTelephone(string $telephone): \App\Entity\Proprietaire
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTelephone', [$telephone]);

        return parent::setTelephone($telephone);
    }

    /**
     * {@inheritDoc}
     */
    public function getEmail(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmail', []);

        return parent::getEmail();
    }

    /**
     * {@inheritDoc}
     */
    public function setEmail(?string $email): \App\Entity\Proprietaire
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmail', [$email]);

        return parent::setEmail($email);
    }

    /**
     * {@inheritDoc}
     */
    public function getTypePiece(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTypePiece', []);

        return parent::getTypePiece();
    }

    /**
     * {@inheritDoc}
     */
    public function setTypePiece(string $typePiece): \App\Entity\Proprietaire
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTypePiece', [$typePiece]);

        return parent::setTypePiece($typePiece);
    }

    /**
     * {@inheritDoc}
     */
    public function getNumPiece(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNumPiece', []);

        return parent::getNumPiece();
    }

    /**
     * {@inheritDoc}
     */
    public function setNumPiece(string $numPiece): \App\Entity\Proprietaire
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNumPiece', [$numPiece]);

        return parent::setNumPiece($numPiece);
    }

    /**
     * {@inheritDoc}
     */
    public function getRole(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRole', []);

        return parent::getRole();
    }

    /**
     * {@inheritDoc}
     */
    public function setRole(string $role): \App\Entity\Proprietaire
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRole', [$role]);

        return parent::setRole($role);
    }

    /**
     * {@inheritDoc}
     */
    public function getLocalite(): ?\App\Entity\Localite
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLocalite', []);

        return parent::getLocalite();
    }

    /**
     * {@inheritDoc}
     */
    public function setLocalite(?\App\Entity\Localite $localite): \App\Entity\Proprietaire
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLocalite', [$localite]);

        return parent::setLocalite($localite);
    }

    /**
     * {@inheritDoc}
     */
    public function getInstallation(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getInstallation', []);

        return parent::getInstallation();
    }

    /**
     * {@inheritDoc}
     */
    public function addInstallation(\App\Entity\Installation $installation): \App\Entity\Proprietaire
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addInstallation', [$installation]);

        return parent::addInstallation($installation);
    }

    /**
     * {@inheritDoc}
     */
    public function removeInstallation(\App\Entity\Installation $installation): \App\Entity\Proprietaire
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeInstallation', [$installation]);

        return parent::removeInstallation($installation);
    }

    /**
     * {@inheritDoc}
     */
    public function nomComplet()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'nomComplet', []);

        return parent::nomComplet();
    }

    /**
     * {@inheritDoc}
     */
    public function getNomComplet()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNomComplet', []);

        return parent::getNomComplet();
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
    public function setCreatedAt(\DateTimeImmutable $created_at): \App\Entity\Proprietaire
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
    public function setUpdatedAt(\DateTimeImmutable $updated_at): \App\Entity\Proprietaire
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
    public function setCreatedby(string $created_by): \App\Entity\Proprietaire
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
    public function setUpdatedBy(string $updated_by): \App\Entity\Proprietaire
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUpdatedBy', [$updated_by]);

        return parent::setUpdatedBy($updated_by);
    }

}
