<?php

namespace TakeOutHotline\Entities;



/**
 * Class Ordersitem
 * @Entity
 * @Table(name="orders_item")
 */



class OrdersItem{
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
     * @return TakeOutHotline\Entities\Order
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * @param TakeOutHotline\Entities\Order $order
     */
    public function setOrder($order)
    {
        $this->order = $order;
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
     * @return int
     */
    public function getAddon()
    {
        return $this->addon;
    }

    /**
     * @param int $addon
     */
    public function setAddon($addon)
    {
        $this->addon = $addon;
    }

    /**
     * @return string
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @param string $quantity
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }


  /**
   * @var int
   * @Id @Column(type="integer", name="id")
   * @GeneratedValue
   */
  private $id;


  /**
   * @var TakeOutHotline\Entities\Order
   * @ManyToOne(targetEntity="TakeOutHotline\Entities\Order", inversedBy="order_item")
   * @JoinColumn(name="order_id", referencedColumnName="order_id")
   */
  private $order;


  /**
   * @var TakeOutHotline\Entities\Menus
   * @ManyToOne(targetEntity="TakeOutHotline\Entities\Menus", inversedBy="order_item", cascade={"persist", "remove"})
   * @JoinColumn(name="menu_id", referencedColumnName="menu_id")
   */
  private $menus;


  /**
   * @var TakeOutHotline\Entities\Client
   * @ManyToOne(targetEntity="TakeOutHotline\Entities\Client", inversedBy="order_item")
   * @JoinColumn(name="client_id", referencedColumnName="client_id")
   */
  private $client;



  /**
   * @var int
   * @Column(type="integer", name="addon")
   */
  private $addon;


  /**
   * @var string
   * @Column(type="string", name="quantity")
   */
  private $quantity;

    /**
     * @var int
     * @Column(type="integer", name="item_id")
     */
    private $itemId;

    /**
     * @return int
     */
    public function getItemId()
    {
        return $this->itemId;
    }

    /**
     * @param int $itemId
     */
    public function setItemId($itemId)
    {
        $this->itemId = $itemId;
    }


}


 ?>
