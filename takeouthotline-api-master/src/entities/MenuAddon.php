<?php

namespace TakeOutHotline\Entities;




/**
 * Class MenuAddon
 * @Entity
 * @Table(name="menu_addon")
 */


class MenuAddon{
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
     * @return TakeOutHotline\Entities\Client
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * @param TakeOutHotline\Entities\Client $client
     */
    public function setClient($client)
    {
        $this->client = $client;
    }

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
     * @return string
     */
    public function getAddonGroupName()
    {
        return $this->addonGroupName;
    }

    /**
     * @param string $addonGroupName
     */
    public function setAddonGroupName($addonGroupName)
    {
        $this->addonGroupName = $addonGroupName;
    }

    /**
     * @return string
     */
    public function getAddonName()
    {
        return $this->addonName;
    }

    /**
     * @param string $addonName
     */
    public function setAddonName($addonName)
    {
        $this->addonName = $addonName;
    }

    /**
     * @return decimal
     */
    public function getAddonPrice()
    {
        return $this->addonPrice;
    }

    /**
     * @param decimal $addonPrice
     */
    public function setAddonPrice($addonPrice)
    {
        $this->addonPrice = $addonPrice;
    }

  /**
   * @var int
   * @Id @Column(type="integer", name="addon_id")
   * @GeneratedValue
   */
  private $id;


  /**
   * @var TakeOutHotline\Entities\Menus
   * @ManyToOne(targetEntity="TakeOutHotline\Entities\Menus", inversedBy="menu_addon")
   * @JoinColumn(name="menu_id", referencedColumnName="menu_id")
   */
  private $menus;


  /**
   * @var TakeOutHotline\Entities\Client
   * @ManyToOne(targetEntity="TakeOutHotline\Entities\Client", inversedBy="menu_addon")
   * @JoinColumn(name="client_id", referencedColumnName="client_id")
   */
  private $client;


  /**
   * @var TakeOutHotline\Entities\Category
   * @ManyToOne(targetEntity="TakeOutHotline\Entities\Category", inversedBy="menu_addon")
   * @JoinColumn(name="menu_category_id", referencedColumnName="category_id")
   */
  private $category;



  /**
   * @var string
   * @Column(type="string", name="addon_group_name")
   */
  private $addonGroupName;


  /**
   * @var string
   * @Column(type="string", name="addon_name")
   */
  private $addonName;



  /**
   * @var decimal
   * @Column(type="decimal", name="addon_price")
   */
  private $addonPrice;


}

 ?>
