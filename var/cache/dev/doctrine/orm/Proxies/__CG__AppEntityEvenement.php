<?php

namespace Proxies\__CG__\App\Entity;


/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Evenement extends \App\Entity\Evenement implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Evenement' . "\0" . 'idEvent', '' . "\0" . 'App\\Entity\\Evenement' . "\0" . 'nomEvent', '' . "\0" . 'App\\Entity\\Evenement' . "\0" . 'descriptionEvent', '' . "\0" . 'App\\Entity\\Evenement' . "\0" . 'dateDebutEvent', '' . "\0" . 'App\\Entity\\Evenement' . "\0" . 'dateFinEvent', '' . "\0" . 'App\\Entity\\Evenement' . "\0" . 'lieuEvent', '' . "\0" . 'App\\Entity\\Evenement' . "\0" . 'budgetEvent', '' . "\0" . 'App\\Entity\\Evenement' . "\0" . 'image', '' . "\0" . 'App\\Entity\\Evenement' . "\0" . 'idCatEvent', '' . "\0" . 'App\\Entity\\Evenement' . "\0" . 'idTransport'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Evenement' . "\0" . 'idEvent', '' . "\0" . 'App\\Entity\\Evenement' . "\0" . 'nomEvent', '' . "\0" . 'App\\Entity\\Evenement' . "\0" . 'descriptionEvent', '' . "\0" . 'App\\Entity\\Evenement' . "\0" . 'dateDebutEvent', '' . "\0" . 'App\\Entity\\Evenement' . "\0" . 'dateFinEvent', '' . "\0" . 'App\\Entity\\Evenement' . "\0" . 'lieuEvent', '' . "\0" . 'App\\Entity\\Evenement' . "\0" . 'budgetEvent', '' . "\0" . 'App\\Entity\\Evenement' . "\0" . 'image', '' . "\0" . 'App\\Entity\\Evenement' . "\0" . 'idCatEvent', '' . "\0" . 'App\\Entity\\Evenement' . "\0" . 'idTransport'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Evenement $proxy) {
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
    public function getIdEvent(): ?int
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getIdEvent();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdEvent', []);

        return parent::getIdEvent();
    }

    /**
     * {@inheritDoc}
     */
    public function getNomEvent(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNomEvent', []);

        return parent::getNomEvent();
    }

    /**
     * {@inheritDoc}
     */
    public function setNomEvent(string $nomEvent): \App\Entity\Evenement
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNomEvent', [$nomEvent]);

        return parent::setNomEvent($nomEvent);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescriptionEvent(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescriptionEvent', []);

        return parent::getDescriptionEvent();
    }

    /**
     * {@inheritDoc}
     */
    public function setDescriptionEvent(string $descriptionEvent): \App\Entity\Evenement
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescriptionEvent', [$descriptionEvent]);

        return parent::setDescriptionEvent($descriptionEvent);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateDebutEvent(): \DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateDebutEvent', []);

        return parent::getDateDebutEvent();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateDebutEvent(\DateTimeInterface $dateDebutEvent): \App\Entity\Evenement
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateDebutEvent', [$dateDebutEvent]);

        return parent::setDateDebutEvent($dateDebutEvent);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateFinEvent(): \DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateFinEvent', []);

        return parent::getDateFinEvent();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateFinEvent(\DateTimeInterface $dateFinEvent): \App\Entity\Evenement
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateFinEvent', [$dateFinEvent]);

        return parent::setDateFinEvent($dateFinEvent);
    }

    /**
     * {@inheritDoc}
     */
    public function getLieuEvent(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLieuEvent', []);

        return parent::getLieuEvent();
    }

    /**
     * {@inheritDoc}
     */
    public function setLieuEvent(string $lieuEvent): \App\Entity\Evenement
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLieuEvent', [$lieuEvent]);

        return parent::setLieuEvent($lieuEvent);
    }

    /**
     * {@inheritDoc}
     */
    public function getBudgetEvent(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBudgetEvent', []);

        return parent::getBudgetEvent();
    }

    /**
     * {@inheritDoc}
     */
    public function setBudgetEvent(?int $budgetEvent): \App\Entity\Evenement
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBudgetEvent', [$budgetEvent]);

        return parent::setBudgetEvent($budgetEvent);
    }

    /**
     * {@inheritDoc}
     */
    public function getImage(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getImage', []);

        return parent::getImage();
    }

    /**
     * {@inheritDoc}
     */
    public function setImage(?string $image): \App\Entity\Evenement
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setImage', [$image]);

        return parent::setImage($image);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdCatEvent(): ?\App\Entity\CategorieEvent
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdCatEvent', []);

        return parent::getIdCatEvent();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdCatEvent(?\App\Entity\CategorieEvent $idCatEvent): \App\Entity\Evenement
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdCatEvent', [$idCatEvent]);

        return parent::setIdCatEvent($idCatEvent);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdTransport(): ?\App\Entity\Transport
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdTransport', []);

        return parent::getIdTransport();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdTransport(?\App\Entity\Transport $idTransport): \App\Entity\Evenement
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdTransport', [$idTransport]);

        return parent::setIdTransport($idTransport);
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
