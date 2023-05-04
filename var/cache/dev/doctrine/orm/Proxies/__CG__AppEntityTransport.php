<?php

namespace Proxies\__CG__\App\Entity;


/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Transport extends \App\Entity\Transport implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Transport' . "\0" . 'idTransport', '' . "\0" . 'App\\Entity\\Transport' . "\0" . 'typeTransport', '' . "\0" . 'App\\Entity\\Transport' . "\0" . 'dateDepart', '' . "\0" . 'App\\Entity\\Transport' . "\0" . 'heureDepart', '' . "\0" . 'App\\Entity\\Transport' . "\0" . 'lieuDepart', '' . "\0" . 'App\\Entity\\Transport' . "\0" . 'lieuArriver', '' . "\0" . 'App\\Entity\\Transport' . "\0" . 'prixTransport'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Transport' . "\0" . 'idTransport', '' . "\0" . 'App\\Entity\\Transport' . "\0" . 'typeTransport', '' . "\0" . 'App\\Entity\\Transport' . "\0" . 'dateDepart', '' . "\0" . 'App\\Entity\\Transport' . "\0" . 'heureDepart', '' . "\0" . 'App\\Entity\\Transport' . "\0" . 'lieuDepart', '' . "\0" . 'App\\Entity\\Transport' . "\0" . 'lieuArriver', '' . "\0" . 'App\\Entity\\Transport' . "\0" . 'prixTransport'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Transport $proxy) {
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
    public function getIdTransport(): ?int
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getIdTransport();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdTransport', []);

        return parent::getIdTransport();
    }

    /**
     * {@inheritDoc}
     */
    public function getTypeTransport(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTypeTransport', []);

        return parent::getTypeTransport();
    }

    /**
     * {@inheritDoc}
     */
    public function setTypeTransport(string $typeTransport): \App\Entity\Transport
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTypeTransport', [$typeTransport]);

        return parent::setTypeTransport($typeTransport);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateDepart(): \DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateDepart', []);

        return parent::getDateDepart();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateDepart(\DateTimeInterface $dateDepart): \App\Entity\Transport
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateDepart', [$dateDepart]);

        return parent::setDateDepart($dateDepart);
    }

    /**
     * {@inheritDoc}
     */
    public function getHeureDepart(): \DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getHeureDepart', []);

        return parent::getHeureDepart();
    }

    /**
     * {@inheritDoc}
     */
    public function setHeureDepart(\DateTimeInterface $heureDepart): \App\Entity\Transport
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setHeureDepart', [$heureDepart]);

        return parent::setHeureDepart($heureDepart);
    }

    /**
     * {@inheritDoc}
     */
    public function getLieuDepart(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLieuDepart', []);

        return parent::getLieuDepart();
    }

    /**
     * {@inheritDoc}
     */
    public function setLieuDepart(string $lieuDepart): \App\Entity\Transport
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLieuDepart', [$lieuDepart]);

        return parent::setLieuDepart($lieuDepart);
    }

    /**
     * {@inheritDoc}
     */
    public function getLieuArriver(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLieuArriver', []);

        return parent::getLieuArriver();
    }

    /**
     * {@inheritDoc}
     */
    public function setLieuArriver(string $lieuArriver): \App\Entity\Transport
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLieuArriver', [$lieuArriver]);

        return parent::setLieuArriver($lieuArriver);
    }

    /**
     * {@inheritDoc}
     */
    public function getPrixTransport(): float
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrixTransport', []);

        return parent::getPrixTransport();
    }

    /**
     * {@inheritDoc}
     */
    public function setPrixTransport(float $prixTransport): \App\Entity\Transport
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPrixTransport', [$prixTransport]);

        return parent::setPrixTransport($prixTransport);
    }

}