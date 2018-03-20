<?php
namespace TakeOutHotline\Entitites;
/**
 * Created by PhpStorm.
 * User: joenefloresca
 * Date: 28/02/2017
 * Time: 12:53 PM
 */
abstract class AbstractEntity
{

    /**
     * @var \TakeOutHotline\AbstractResource
     */
    protected $resource;

    /**
     * @return \TakeOutHotline\AbstractResource
     */
    public function getResource()
    {
        return $this->resource;
    }

    /**
     * @param \TakeOutHotline\AbstractResource $resource
     */
    public function setResource($resource)
    {
        $this->resource = $resource;
    }
}