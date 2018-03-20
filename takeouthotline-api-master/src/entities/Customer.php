<?php
/**
 * Created by PhpStorm.
 * User: joenefloresca
 * Date: 28/02/2017
 * Time: 3:31 PM
 */

namespace TakeOutHotline\Entities;
use Doctrine\Common\Collections\ArrayCollection;
/**
 * Class Customer
 * @Entity
 * @Table(name="customer")
 */
class Customer
{
    /**
     * Constructor class
     */
    public function __construct(){
        $this->orders = new ArrayCollection();
    }

    /**
     * @var int
     * @Id @Column(type="integer", name="customer_id")
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

    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @var string
     * @Column(type="string", name="first_name")
     */
    private $firstName;

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
     * @var string
     * @Column(type="string", name="last_name")
     */
    private $lastName;

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
     * @Column(type="string", name="phone")
     */
    private $phone;

    /**
     * @var string
     * @Column(type="string", name="city")
     */
    private $city;

    /**
     * @var string
     * @Column(type="string", name="postal_code")
     */
    private $postalCode;

    /**
     * @var string
     * @Column(type="string", name="remarks")
     */
    private $remarks;

    /**
     * @var string
     * @Column(type="string", name="status")
     */
    private $status;

    /**
     * @var string
     * @Column(type="string", name="email")
     */
    private $email;

    /**
     * @var string
     * @Column(type="string", name="mypass")
     */
    private $mypass;

    /**
     * @var string
     * @Column(type="string", name="name_title")
     */
    private $nameTitle;

    /**
     * @var int
     * @Column(type="integer", name="email_verified")
     */
    private $emailVerified;
    
      /**
     * @var string
     * @Column(type="string", name="cus_from")
     */
    private $cusFrom; 
    
     /**
     * @var datetime
     * @Column(type="datetime", name="date_registered")
     */
    private $dateRegistered;
    
     

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
    public function getPostalCode()
    {
        return $this->postalCode;
    }

    /**
     * @param string $postalCode
     */
    public function setPostalCode($postalCode)
    {
        $this->postalCode = $postalCode;
    }

    /**
     * @return string
     */
    public function getRemarks()
    {
        return $this->remarks;
    }

    /**
     * @param string $remarks
     */
    public function setRemarks($remarks)
    {
        $this->remarks = $remarks;
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
    public function getCusFrom()
    {
        return $this->cusFrom;
    }

    public function setCusFrom($default)
    {
      $this->cusFrom = $default;
    }  
     /**
     * @return \DateRegistered
     */
    public function getDateRegistered()
    {
        return $this->dateRegistered;
    }

    /**
     * @param \DateTime $dateRegistered
     */
    public function setDateRegistered($dateRegistered)
    {
        $this->dateRegistered = $dateRegistered;
    }

    /**
     * @return string
     */
    public function getNameTitle()
    {
        return $this->nameTitle;
    }

    /**
     * @param string $nameTitle
     */
    public function setNameTitle($nameTitle)
    {
        $this->nameTitle = $nameTitle;
    }

    /**
     * @return int
     */
    public function getEmailVerified()
    {
        return $this->emailVerified;
    }

    /**
     * @param int $emailVerified
     */
    public function setEmailVerified($emailVerified)
    {
        $this->emailVerified = $emailVerified;
    }

    /**
     * @var \Doctrine\Common\Collections\ArrayCollection
     * @OneToMany(targetEntity="TakeOutHotline\Entities\Order", mappedBy="customer")
     *
     */
    private $orders = [];

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


}
