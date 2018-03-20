<?php

namespace TakeOutHotline\Entities;


/**
 * Class Cuisine
 * @Entity
 * @Table(name="cuisine")
 */

class Cuisine{


  /**
   * @var int
   * @Id @Column(type="integer", name="cuisine_id")
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

    /**
     * @return string
     */
    public function getCuisine()
    {
        return $this->cuisine;
    }

    /**
     * @param string $cuisine
     */
    public function setCuisine($cuisine)
    {
        $this->cuisine = $cuisine;
    }


  /**
   * @var string
   * @Column(type="string", name="cuisine")
   */
  private $cuisine;


}
