<?php
/**
 * Created by PhpStorm.
 * User: joenefloresca
 * Date: 03/03/2017
 * Time: 10:37 PM
 */

namespace TakeOutHotline\Entities;

/**
 * Class Client
 * @Entity
 * @Table(name="menu_price")
 */

class MenuPrice
{
    /**
     * @var int
     * @Id @Column(type="integer", name="price_id")
     * @GeneratedValue
     */
    private $id;

    /**
     * @var int
     * @Column(type="integer", name="price_type")
     */
    private $priceType;

    /**
     * @var decimal
     * @Column(type="decimal", name="price")
     */
    private $price;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return int
     */
    public function getPriceType()
    {
        return $this->priceType;
    }

    /**
     * @param int $priceType
     */
    public function setPriceType($priceType)
    {
        $this->priceType = $priceType;
    }

    /**
     * @return decimal
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param decimal $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * @return string
     */
    public function getOptType()
    {
        return $this->optType;
    }

    /**
     * @return TakeOutHotline\Entities\Menus
     */
    public function getMenus()
    {
        return $this->menus;
    }

    /**
     * @param TakeOutHotline\Entities\Menus $menus
     */
    public function setMenus($menus)
    {
        $this->menus = $menus;
    }

    /**
     * @param string $optType
     */
    public function setOptType($optType)
    {
        $this->optType = $optType;
    }

    /**
     * @var string
     * @Column(type="string", name="opt_type")
     */
    private $optType;


    /**
     * @var TakeOutHotline\Entities\Menus
     * @ManyToOne(targetEntity="TakeOutHotline\Entities\Menus", inversedBy="menuPrices")
     * @JoinColumn(name="menu_id", referencedColumnName="menu_id")
     */
    private $menus;
}