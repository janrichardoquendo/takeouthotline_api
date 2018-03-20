<?php

/**
 * Created by PhpStorm.
 * User: joenefloresca
 * Date: 03/03/2017
 * Time: 9:04 PM
 */

namespace TakeOutHotline\Entities;

use Doctrine\Common\Collections\ArrayCollection;

/**
 * Class Order
 * @Entity
 * @Table(name="orders")
 */
class Order
{
    /**
     * Constructor class
     */
    public function __construct()
    {
        $this->order_item = new ArrayCollection();
    }

    /**
     * @var int
     * @Id @Column(type="integer", name="order_id")
     * @GeneratedValue
     */
    private $id;

    /**
     * @var int
     * @Column(type="integer", name="customer_id")
     */
    private $customer_id;

    /**
     * @return int
     */
    public function getCustomerId()
    {
        return $this->customer_id;
    }

    /**
     * @param int $customer_id
     */
    public function setCustomerId($customer_id)
    {
        $this->customer_id = $customer_id;
    }

    /**
     * @var TakeOutHotline\Entities\Customer
     * @ManyToOne(targetEntity="TakeOutHotline\Entities\Customer", inversedBy="orders")
     * @JoinColumn(name="customer_id", referencedColumnName="customer_id")
     */
    private $customer;

    /**
     * @var string
     * @Column(type="string", name="firstname")
     */
    private $firstName;

    /**
     * @var string
     * @Column(type="string", name="lastname")
     */
    private $lastName;

    /**
     * @var string
     * @Column(type="string", name="address1")
     */
    private $address1;

    /**
     * @var string
     * @Column(type="string", name="address2")
     */
    private $address2;

    /**
     * @var string
     * @Column(type="string", name="city")
     */
    private $city;

    /**
     * @var string
     * @Column(type="string", name="postcode")
     */
    private $postcode;

    /**
     * @var float
     * @Column(type="float", name="total")
     */
    private $total;

    /**
     * @return float
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * @param float $total
     */
    public function setTotal($total)
    {
        $this->total = $total;
    }

    /**
     * @var string
     * @Column(type="string", name="phone")
     */
    private $phone;

    /**
     * @var string
     * @Column(type="string", name="data_from")
     */
    private $dataFrom;

    /**
     * @var int
     * @Column(type="integer", name="status")
     */
    private $status;

    /**
     * @var string
     * @Column(type="string", name="mode")
     */
    private $mode;

    /**
     * @return string
     */
    public function getMode()
    {
        return $this->mode;
    }

    /**
     * @param string $mode
     */
    public function setMode($mode)
    {
        $this->mode = $mode;
    }

    /**
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param int $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * @var TakeOutHotline\Entities\Client
     * @ManyToOne(targetEntity="TakeOutHotline\Entities\Client", inversedBy="orders")
     * @JoinColumn(name="client_id", referencedColumnName="client_id")
     */
    private $client;

    /**
     * @return string
     */
    public function getDataFrom()
    {
        return $this->dataFrom;
    }

    public function setDataFrom($default)
    {
        $this->dataFrom = $default;
    }

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
     * @return TakeOutHotline\Entities\Customer
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * @param TakeOutHotline\Entities\Customer $customer
     */
    public function setCustomer($customer)
    {
        $this->customer = $customer;
    }

    /**
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param string $firstName
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    /**
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @param string $lastName
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    /**
     * @return string
     */
    public function getAddress1()
    {
        return $this->address1;
    }

    /**
     * @param string $address1
     */
    public function setAddress1($address1)
    {
        $this->address1 = $address1;
    }

    /**
     * @return string
     */
    public function getAddress2()
    {
        return $this->address2;
    }

    /**
     * @param string $address2
     */
    public function setAddress2($address2)
    {
        $this->address2 = $address2;
    }

    /**
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param string $city
     */
    public function setCity($city)
    {
        $this->city = $city;
    }

    /**
     * @return string
     */
    public function getPostcode()
    {
        return $this->postcode;
    }

    /**
     * @param string $postcode
     */
    public function setPostcode($postcode)
    {
        $this->postcode = $postcode;
    }

    /**
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param string $phone
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
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
     * @return \DateTime
     */
    public function getOrderDate()
    {
        return $this->orderDate;
    }

    /**
     * @param \DateTime $orderDate
     */
    public function setOrderDate($orderDate)
    {
        $this->orderDate = $orderDate;
    }

    /**
     * @return string
     */
    public function getCookie()
    {
        return $this->cookie;
    }

    /**
     * @param string $cookie
     */
    public function setCookie($cookie)
    {
        $this->cookie = $cookie;
    }

    /**
     * @return int
     */
    public function getTakenOrder()
    {
        return $this->takenOrder;
    }

    /**
     * @param int $takenOrder
     */
    public function setTakenOrder($takenOrder)
    {
        $this->takenOrder = $takenOrder;
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
     * @var \DateTime
     * @Column(type="datetime", name="order_date")
     */
    private $orderDate;

    /**
     * @var string
     * @Column(type="string", name="cookie")
     */
    private $cookie;

    /**
     * @var int
     * @Column(type="integer", name="taken_order")
     */
    private $takenOrder;


    /**
     * @var \Doctrine\Common\Collections\ArrayCollection
     * @OneToMany(targetEntity="TakeOutHotline\Entities\OrdersItem", mappedBy="order", cascade={"persist", "remove"})
     *
     */
    private $order_item = [];


}
