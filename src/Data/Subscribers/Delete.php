<?php

namespace Cheetahmail\Data\Subscribers;

class Delete
{

    /**
     * @var int $subscriberId
     */
    protected $subscriberId = null;

    /**
     * @param int $subscriberId
     */
    public function __construct($subscriberId)
    {
      $this->subscriberId = $subscriberId;
    }

    /**
     * @return int
     */
    public function getSubscriberId()
    {
      return $this->subscriberId;
    }

    /**
     * @param int $subscriberId
     * @return \Cheetahmail\Data\Subscribers\Delete
     */
    public function setSubscriberId($subscriberId)
    {
      $this->subscriberId = $subscriberId;
      return $this;
    }

}
