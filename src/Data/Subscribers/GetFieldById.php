<?php

namespace Cheetahmail\Data\Subscribers;

class GetFieldById
{

    /**
     * @var int $subscriberId
     */
    protected $subscriberId = null;

    /**
     * @var int $numCol
     */
    protected $numCol = null;

    /**
     * @param int $subscriberId
     * @param int $numCol
     */
    public function __construct($subscriberId, $numCol)
    {
      $this->subscriberId = $subscriberId;
      $this->numCol = $numCol;
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
     * @return \Cheetahmail\Data\Subscribers\GetFieldById
     */
    public function setSubscriberId($subscriberId)
    {
      $this->subscriberId = $subscriberId;
      return $this;
    }

    /**
     * @return int
     */
    public function getNumCol()
    {
      return $this->numCol;
    }

    /**
     * @param int $numCol
     * @return \Cheetahmail\Data\Subscribers\GetFieldById
     */
    public function setNumCol($numCol)
    {
      $this->numCol = $numCol;
      return $this;
    }

}
