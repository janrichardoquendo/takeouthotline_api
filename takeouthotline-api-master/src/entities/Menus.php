<?php

namespace TakeOutHotline\Entities;
use Doctrine\Common\Collections\ArrayCollection;


/**
 * Class Menus
 * @Entity
 * @Table(name="menus")
 */

class Menus{
    /**
     * @return TakeOutHotline\Entities\Category
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param TakeOutHotline\Entities\Category $category
     */
    public function setCategory($category)
    {
        $this->category = $category;
    }

  /**
   * Constructor class
   */
  public function __construct(){
      $this->order_item = new ArrayCollection();
      $this->menu_addon = new ArrayCollection();
      $this->menuPrices = new ArrayCollection();
  }

    /**
     * @return \Doctrine\Common\Collections\ArrayCollection
     */
    public function getMenuPrices()
    {
        return $this->menuPrices;
    }

    /**
     * @param \Doctrine\Common\Collections\ArrayCollection $menuPrices
     */
    public function setMenuPrices($menuPrices)
    {
        $this->menuPrices = $menuPrices;
    }


  /**
   * @var int
   * @Id @Column(type="integer", name="menu_id")
   * @GeneratedValue
   */
  private $id;

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

//    /**
//     * @return TakeOutHotline\Entities\Customer
//     */
//    public function getClient()
//    {
//        return $this->client;
//    }

//    /**
//     * @param TakeOutHotline\Entities\Customer $client
//     */
//    public function setClient($client)
//    {
//        $this->client = $client;
//    }

    /**
     * @return string
     */
    public function getMenuName()
    {
        return $this->menu_name;
    }

    /**
     * @param string $menu_name
     */
    public function setMenuName($menu_name)
    {
        $this->menu_name = $menu_name;
    }

    /**
     * @return int
     */
    public function getPriceType()
    {
        return $this->price_type;
    }

    /**
     * @param int $price_type
     */
    public function setPriceType($price_type)
    {
        $this->price_type = $price_type;
    }

    /**
     * @return int
     */
    public function getMenuCategory()
    {
        return $this->menu_category;
    }

    /**
     * @param int $menu_category
     */
    public function setMenuCategory($menu_category)
    {
        $this->menu_category = $menu_category;
    }

    /**
     * @return string
     */
    public function getMenuDescription()
    {
        return $this->menu_description;
    }

    /**
     * @param string $menu_description
     */
    public function setMenuDescription($menu_description)
    {
        $this->menu_description = $menu_description;
    }

    /**
     * @return string
     */
    public function getMenuImage()
    {
        return $this->menu_image;
    }

    /**
     * @param string $menu_image
     */
    public function setMenuImage($menu_image)
    {
        $this->menu_image = $menu_image;
    }

    /**
     * @return int
     */
    public function getIsDeleted()
    {
        return $this->is_deleted;
    }

    /**
     * @param int $is_deleted
     */
    public function setIsDeleted($is_deleted)
    {
        $this->is_deleted = $is_deleted;
    }

    /**
     * @return \DateTime
     */
    public function getUpdatedLast()
    {
        return $this->updated_last;
    }

    /**
     * @param \DateTime $updated_last
     */
    public function setUpdatedLast($updated_last)
    {
        $this->updated_last = $updated_last;
    }

    /**
     * @return int
     */
    public function getUpdatedBy()
    {
        return $this->updated_by;
    }

    /**
     * @param int $updated_by
     */
    public function setUpdatedBy($updated_by)
    {
        $this->updated_by = $updated_by;
    }

    /**
     * @return \Doctrine\Common\Collections\ArrayCollection
     */
    public function getOrderItem()
    {
        return $this->order_item;
    }

    /**
     * @param \Doctrine\Common\Collections\ArrayCollection $order_item
     */
    public function setOrderItem($order_item)
    {
        $this->order_item = $order_item;
    }

    /**
     * @return \Doctrine\Common\Collections\ArrayCollection
     */
    public function getMenuAddon()
    {
        return $this->menu_addon;
    }

    /**
     * @param \Doctrine\Common\Collections\ArrayCollection $menu_addon
     */
    public function setMenuAddon($menu_addon)
    {
        $this->menu_addon = $menu_addon;
    }


//  /**
//   * @var TakeOutHotline\Entities\Customer
//   * @ManyToOne(targetEntity="TakeOutHotline\Entities\Client", inversedBy="client")
//   * @JoinColumn(name="client_id", referencedColumnName="client_id")
//   */
//  private $client;


  /**
   * @var string
   * @Column(type="string", name="menu_name")
   */
  private $menu_name;


  /**
   * @var int
   * @Column(type="integer", name="price_type")
   */
  private $price_type;



  /**
   * @var int
   * @Column(type="integer", name="menu_category")
   */
  private $menu_category;


  /**
   * @var string
   * @Column(type="string", name="menu_description")
   */
  private $menu_description;



  /**
   * @var string
   * @Column(type="string", name="menu_image")
   */
  private $menu_image;



  /**
   * @var int
   * @Column(type="integer", name="is_deleted")
   */
  private $is_deleted;


  /**
   * @var \DateTime
   * @Column(type="datetime", name="updated_last")
   */
  private $updated_last;



  /**
   * @var int
   * @Column(type="integer", name="updated_by")
   */
  private $updated_by;



  /**
   * @var \Doctrine\Common\Collections\ArrayCollection
   * @OneToMany(targetEntity="TakeOutHotline\Entities\OrdersItem", mappedBy="menus")
   *
   */
  private $order_item = [];


  /**
   * @var \Doctrine\Common\Collections\ArrayCollection
   * @OneToMany(targetEntity="TakeOutHotline\Entities\MenuAddon", mappedBy="menus")
   *
   */
  private $menu_addon = [];

    /**
     * @var \Doctrine\Common\Collections\ArrayCollection
     * @OneToMany(targetEntity="TakeOutHotline\Entities\MenuPrice", mappedBy="menus")
     *
     */
    private $menuPrices = [];

    /**
     * @var TakeOutHotline\Entities\Category
     * @ManyToOne(targetEntity="TakeOutHotline\Entities\Category", inversedBy="menus")
     * @JoinColumn(name="menu_category", referencedColumnName="category_id")
     */
    private $category;



}
