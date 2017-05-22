<?php

namespace Cheetahmail\Data\Subscribers;

class Find
{

    /**
     * @var ArrayOfArrayOfString $criteria
     */
    protected $criteria = null;

    /**
     * @param ArrayOfArrayOfString $criteria
     */
    public function __construct($criteria)
    {
      $this->criteria = $criteria;
    }

    /**
     * @return ArrayOfArrayOfString
     */
    public function getCriteria()
    {
      return $this->criteria;
    }

    /**
     * @param ArrayOfArrayOfString $criteria
     * @return \Cheetahmail\Data\Subscribers\Find
     */
    public function setCriteria($criteria)
    {
      $this->criteria = $criteria;
      return $this;
    }

}
