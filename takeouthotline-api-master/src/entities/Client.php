<?php
/**
 * Created by PhpStorm.
 * User: joenefloresca
 * Date: 03/03/2017
 * Time: 9:29 PM
 */

namespace TakeOutHotline\Entities;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Criteria;
/**
 * Class Client
 * @Entity
 * @Table(name="client")
 */

class Client
{
    /**
     * Constructor class
     */
    public function __construct(){
        $this->orders = new ArrayCollection();
        //$this->menus = new ArrayCollection();
        $this->order_item = new ArrayCollection();
        $this->menu_addon = new ArrayCollection();
        $this->category = new ArrayCollection();
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
     * @return \Doctrine\Common\Collections\ArrayCollection
     */
    public function getOrders()
    {
        return $this->orders;
    }

    /**
     * @param \Doctrine\Common\Collections\ArrayCollection $orders
     */
    public function setOrders($orders)
    {
        $this->orders = $orders;
    }

//    /**
//     * @return \Doctrine\Common\Collections\ArrayCollection
//     */
//    public function getMenus()
//    {
//        return $this->menus;
//    }

//    /**
//     * @param \Doctrine\Common\Collections\ArrayCollection $menus
//     */
//    public function setMenus($menus)
//    {
//        $this->menus = $menus;
//    }

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

    /**
     * @return \Doctrine\Common\Collections\ArrayCollection
     */
    public function getCategory()
    {
        return $this->category;
    }

    public function getFilteredCategories()
    {
        $criteria = Criteria::create();
        $criteria->where(Criteria::expr()->eq('isDeleted', 0))->orderBy(array('id' => Criteria::ASC));
        return $this->category->matching($criteria);
    }

    /**
     * @param \Doctrine\Common\Collections\ArrayCollection $category
     */
    public function setCategory($category)
    {
        $this->category = $category;
    }

    /**
     * @var int
     * @Id @Column(type="integer", name="client_id", columnDefinition="UNSIGED INTEGER(5) ZEROFILL")
     * @GeneratedValue
     */
    private $id;

    /**
     * @var \Doctrine\Common\Collections\ArrayCollection
     * @OneToMany(targetEntity="TakeOutHotline\Entities\Order", mappedBy="client")
     *
     */
    private $orders = [];

//    /**
//     * @var \Doctrine\Common\Collections\ArrayCollection
//     * @OneToMany(targetEntity="TakeOutHotline\Entities\Menus", mappedBy="client")
//     *
//     */
//    private $menus = [];


    /**
     * @var \Doctrine\Common\Collections\ArrayCollection
     * @OneToMany(targetEntity="TakeOutHotline\Entities\OrdersItem", mappedBy="menus")
     *
     */
    private $order_item = [];


    /**
     * @var \Doctrine\Common\Collections\ArrayCollection
     * @OneToMany(targetEntity="TakeOutHotline\Entities\MenuAddon", mappedBy="client")
     *
     */
    private $menu_addon = [];

    /**
     * @var \Doctrine\Common\Collections\ArrayCollection
     * @OneToMany(targetEntity="TakeOutHotline\Entities\Category", mappedBy="client")
     *
     */
    private $category = [];

    /**
     * @var string
     * @Column(type="string", name="postcode")
     */
    private $postcode;

    /**
     * @var string
     * @Column(type="string", name="description")
     */
    private $description;

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
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
     * @var string
     * @Column(type="string", name="title")
     */
    private $title;

    /**
     * @var string
     * @Column(type="string", name="firstname")
     */
    private $firstname;

    /**
     * @var string
     * @Column(type="string", name="middlename")
     */
    private $middlename;

    /**
     * @var string
     * @Column(type="string", name="lastname")
     */
    private $lastname;

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * @param string $firstname
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
    }

    /**
     * @return string
     */
    public function getMiddlename()
    {
        return $this->middlename;
    }

    /**
     * @param string $middlename
     */
    public function setMiddlename($middlename)
    {
        $this->middlename = $middlename;
    }

    /**
     * @return string
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * @param string $lastname
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
    }

    /**
     * @var string
     * @Column(type="string", name="address")
     */
    private $address;

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
     * @Column(type="string", name="country")
     */
    private $country;

    /**
     * @var string
     * @Column(type="string", name="image")
     */
    private $image;

    /**
     * @var string
     * @Column(type="string", name="name_resto")
     */
    private $nameResto;

    /**
     * @var string
     * @Column(type="string", name="exchange_rate")
     */
    private $exchangeRate;

    /**
     * @var string
     * @Column(type="string", name="phone")
     */
    private $phone;

    /**
     * @var string
     * @Column(type="string", name="contact")
     */
    private $contact;

    /**
     * @var string
     * @Column(type="string", name="status")
     */
    private $status;

    /**
     * @var string
     * @Column(type="string", name="logo")
     */
    private $logo;

    /**
     * @var string
     * @Column(type="string", name="town")
     */
    private $town;

    /**
     * @var string
     * @Column(type="string", name="website")
     */
    private $website;

    /**
     * @var string
     * @Column(type="string", name="email")
     */
    private $email;

    /**
     * @var string
     * @Column(type="string", name="mobile")
     */
    private $mobile;

    /**
     * @var string
     * @Column(type="string", name="greeting")
     */
    private $greeting;

    /**
     * @var int
     * @Column(type="integer", name="updated_by")
     */
    private $updated_by;

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
     * @return string
     */
    public function getGreeting()
    {
        return $this->greeting;
    }

    /**
     * @param string $greeting
     */
    public function setGreeting($greeting)
    {
        $this->greeting = $greeting;
    }

    /**
     * @return string
     */
    public function getMobile()
    {
        return $this->mobile;
    }

    /**
     * @param string $mobile
     */
    public function setMobile($mobile)
    {
        $this->mobile = $mobile;
    }



    /**
     * @var string
     * @Column(type="string", name="mypass")
     */
    private $mypass;

    /**
     * @var \DateTime
     * @Column(type="datetime", name="created")
     */
    private $created;

    /**
     * @var \DateTime
     * @Column(type="datetime", name="updated_last")
     */
    private $updated_last;

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
     * @var int
     * @Column(type="integer", name="mincharge")
     */
    private $mincharge;

    /**
     * @return int
     */
    public function getMincharge()
    {
        return $this->mincharge;
    }

    /**
     * @param int $mincharge
     */
    public function setMincharge($mincharge)
    {
        $this->mincharge = $mincharge;
    }



    /**
     * @return \DateTime
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * @param \DateTime $created
     */
    public function setCreated($created)
    {
        $this->created = $created;
    }

    /**
     * @return string
     */
    public function getMypass()
    {
        return $this->mypass;
    }

    /**
     * @param string $mypass
     */
    public function setMypass($mypass)
    {
        $this->mypass = $mypass;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getWebsite()
    {
        return $this->website;
    }

    /**
     * @param string $website
     */
    public function setWebsite($website)
    {
        $this->website = $website;
    }

    /**
     * @return string
     */
    public function getTown()
    {
        return $this->town;
    }

    /**
     * @param string $town
     */
    public function setTown($town)
    {
        $this->town = $town;
    }

    /**
     * @return string
     */
    public function getLogo()
    {
        return $this->logo;
    }

    /**
     * @param string $logo
     */
    public function setLogo($logo)
    {
        $this->logo = $logo;
    }

    /**
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param string $address
     */
    public function setAddress($address)
    {
        $this->address = $address;
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
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param string $country
     */
    public function setCountry($country)
    {
        $this->country = $country;
    }

    /**
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param string $image
     */
    public function setImage($image)
    {
        $this->image = $image;
    }

    /**
     * @return string
     */
    public function getNameResto()
    {
        return $this->nameResto;
    }

    /**
     * @param string $nameResto
     */
    public function setNameResto($nameResto)
    {
        $this->nameResto = $nameResto;
    }

    /**
     * @return string
     */
    public function getExchangeRate()
    {
        return $this->exchangeRate;
    }

    /**
     * @param string $exchangeRate
     */
    public function setExchangeRate($exchangeRate)
    {
        $this->exchangeRate = $exchangeRate;
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
     * @return string
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * @param string $contact
     */
    public function setContact($contact)
    {
        $this->contact = $contact;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }




}
