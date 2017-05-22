<?php

namespace Cheetahmail\Data\Subscribers;

class GetByTisId
{

    /**
     * @var string $tisId
     */
    protected $tisId = null;

    /**
     * @param string $tisId
     */
    public function __construct($tisId)
    {
      $this->tisId = $tisId;
    }

    /**
     * @return string
     */
    public function getTisId()
    {
      return $this->tisId;
    }

    /**
     * @param string $tisId
     * @return \Cheetahmail\Data\Subscribers\GetByTisId
     */
    public function setTisId($tisId)
    {
      $this->tisId = $tisId;
      return $this;
    }

}
