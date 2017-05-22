<?php

namespace Cheetahmail\Campaigns\BodyManager;

class NewCataDetails
{

    /**
     * @var string $description
     */
    protected $description = null;

    /**
     * @var boolean $active
     */
    protected $active = null;

    /**
     * @param boolean $active
     */
    public function __construct($active)
    {
      $this->active = $active;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->description;
    }

    /**
     * @param string $description
     * @return \Cheetahmail\Campaigns\BodyManager\NewCataDetails
     */
    public function setDescription($description)
    {
      $this->description = $description;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getActive()
    {
      return $this->active;
    }

    /**
     * @param boolean $active
     * @return \Cheetahmail\Campaigns\BodyManager\NewCataDetails
     */
    public function setActive($active)
    {
      $this->active = $active;
      return $this;
    }

}
