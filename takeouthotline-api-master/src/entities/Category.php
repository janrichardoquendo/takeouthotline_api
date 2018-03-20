<?php
/**
 * Created by PhpStorm.
 * User: joenefloresca
 * Date: 03/03/2017
 * Time: 11:04 PM
 */

namespace TakeOutHotline\Entities;
use Doctrine\Common\Collections\Criteria;

/**
 * Class Menus
 * @Entity
 * @Table(name="category", )
 */
class Category
{
    public function __construct(){
        $this->menus = new ArrayCollection();
        $this->menu_addon = new ArrayCollection();
    }

    /**
     * @return \Doctrine\Common\Collections\ArrayCollection
     */
    public function getMenus()
    {
        return $this->menus;
    }

    public function getFilteredMenus()
    {
        $criteria = Criteria::create();
        $criteria->where(Criteria::expr()->eq('is_deleted', 0))->orderBy(array('id' => Criteria::ASC));
        return $this->menus->matching($criteria);
    }

    /**
     * @param \Doctrine\Common\Collections\ArrayCollection $menus
     */
    public function setMenus($menus)
    {
        $this->menus = $menus;
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
     * @return string
     */
    public function getCatName()
    {
        return $this->catName;
    }

    /**
     * @param string $catName
     */
    public function setCatName($catName)
    {
        $this->catName = $catName;
    }

    /**
     * @return string
     */
    public function getCatDescription()
    {
        return $this->catDescription;
    }

    /**
     * @param string $catDescription
     */
    public function setCatDescription($catDescription)
    {
        $this->catDescription = $catDescription;
    }

    /**
     * @return TakeOutHotline\Entities\Customer
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * @param TakeOutHotline\Entities\Customer $client
     */
    public function setClient($client)
    {
        $this->client = $client;
    }

    /**
     * @return int
     */
    public function getIsDeleted()
    {
        return $this->isDeleted;
    }

    /**
     * @param int $isDeleted
     */
    public function setIsDeleted($isDeleted)
    {
        $this->isDeleted = $isDeleted;
    }

    /**
     * @return \DateTime
     */
    public function getUpdatedLast()
    {
        return $this->updatedLast;
    }

    /**
     * @param \DateTime $updatedLast
     */
    public function setUpdatedLast($updatedLast)
    {
        $this->updatedLast = $updatedLast;
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
     * @var int
     * @Id @Column(type="integer", name="category_id")
     * @GeneratedValue
     */
    private $id;


    /**
     * @var string
     * @Column(type="string", name="catname")
     */
    private $catName;

    /**
     * @var string
     * @Column(type="string", name="catdescription")
     */
    private $catDescription;

    /**
     * @var TakeOutHotline\Entities\Customer
     * @ManyToOne(targetEntity="TakeOutHotline\Entities\Client", inversedBy="category")
     * @JoinColumn(name="client_id", referencedColumnName="client_id")
     */
    private $client;

    /**
     * @var int
     * @Column(type="integer", name="is_deleted")
     */
    private $isDeleted;

    /**
     * @var \DateTime
     * @Column(type="datetime", name="updated_last")
     */
    private $updatedLast;


    /**
     * @var \Doctrine\Common\Collections\ArrayCollection
     * @OneToMany(targetEntity="TakeOutHotline\Entities\MenuAddon", mappedBy="category")
     *
     */
    private $menu_addon = [];

    /**
     * @var \Doctrine\Common\Collections\ArrayCollection
     * @OneToMany(targetEntity="TakeOutHotline\Entities\Menus", mappedBy="category")
     *
     */
    private $menus = [];

}

