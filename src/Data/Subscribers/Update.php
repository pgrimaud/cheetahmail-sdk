<?php

namespace Cheetahmail\Data\Subscribers;

class Update
{

    /**
     * @var int $subscriberId
     */
    protected $subscriberId = null;

    /**
     * @var ArrayOfArrayOfString $data
     */
    protected $data = null;

    /**
     * @param int $subscriberId
     * @param ArrayOfArrayOfString $data
     */
    public function __construct($subscriberId, $data)
    {
      $this->subscriberId = $subscriberId;
      $this->data = $data;
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
     * @return \Cheetahmail\Data\Subscribers\Update
     */
    public function setSubscriberId($subscriberId)
    {
      $this->subscriberId = $subscriberId;
      return $this;
    }

    /**
     * @return ArrayOfArrayOfString
     */
    public function getData()
    {
      return $this->data;
    }

    /**
     * @param ArrayOfArrayOfString $data
     * @return \Cheetahmail\Data\Subscribers\Update
     */
    public function setData($data)
    {
      $this->data = $data;
      return $this;
    }

}
