<?php

namespace DoctrineProxies\__CG__\TakeOutHotline\Entities;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class MenuPrice extends \TakeOutHotline\Entities\MenuPrice implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = [];



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
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
            return ['__isInitialized__', '' . "\0" . 'TakeOutHotline\\Entities\\MenuPrice' . "\0" . 'id', '' . "\0" . 'TakeOutHotline\\Entities\\MenuPrice' . "\0" . 'priceType', '' . "\0" . 'TakeOutHotline\\Entities\\MenuPrice' . "\0" . 'price', '' . "\0" . 'TakeOutHotline\\Entities\\MenuPrice' . "\0" . 'optType', '' . "\0" . 'TakeOutHotline\\Entities\\MenuPrice' . "\0" . 'menus'];
        }

        return ['__isInitialized__', '' . "\0" . 'TakeOutHotline\\Entities\\MenuPrice' . "\0" . 'id', '' . "\0" . 'TakeOutHotline\\Entities\\MenuPrice' . "\0" . 'priceType', '' . "\0" . 'TakeOutHotline\\Entities\\MenuPrice' . "\0" . 'price', '' . "\0" . 'TakeOutHotline\\Entities\\MenuPrice' . "\0" . 'optType', '' . "\0" . 'TakeOutHotline\\Entities\\MenuPrice' . "\0" . 'menus'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (MenuPrice $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
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
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId()
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
    public function setId($id)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setId', [$id]);

        return parent::setId($id);
    }

    /**
     * {@inheritDoc}
     */
    public function getPriceType()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPriceType', []);

        return parent::getPriceType();
    }

    /**
     * {@inheritDoc}
     */
    public function setPriceType($priceType)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPriceType', [$priceType]);

        return parent::setPriceType($priceType);
    }

    /**
     * {@inheritDoc}
     */
    public function getPrice()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrice', []);

        return parent::getPrice();
    }

    /**
     * {@inheritDoc}
     */
    public function setPrice($price)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPrice', [$price]);

        return parent::setPrice($price);
    }

    /**
     * {@inheritDoc}
     */
    public function getOptType()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOptType', []);

        return parent::getOptType();
    }

    /**
     * {@inheritDoc}
     */
    public function getMenus()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMenus', []);

        return parent::getMenus();
    }

    /**
     * {@inheritDoc}
     */
    public function setMenus($menus)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMenus', [$menus]);

        return parent::setMenus($menus);
    }

    /**
     * {@inheritDoc}
     */
    public function setOptType($optType)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOptType', [$optType]);

        return parent::setOptType($optType);
    }

}
