<?php

namespace Cheetahmail\Data\Subscribers;

class CheckPhoneNumber
{

    /**
     * @var int $subscriberId
     */
    protected $subscriberId = null;

    /**
     * @var int $numColonne
     */
    protected $numColonne = null;

    /**
     * @param int $subscriberId
     * @param int $numColonne
     */
    public function __construct($subscriberId, $numColonne)
    {
      $this->subscriberId = $subscriberId;
      $this->numColonne = $numColonne;
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
     * @return \Cheetahmail\Data\Subscribers\CheckPhoneNumber
     */
    public function setSubscriberId($subscriberId)
    {
      $this->subscriberId = $subscriberId;
      return $this;
    }

    /**
     * @return int
     */
    public function getNumColonne()
    {
      return $this->numColonne;
    }

    /**
     * @param int $numColonne
     * @return \Cheetahmail\Data\Subscribers\CheckPhoneNumber
     */
    public function setNumColonne($numColonne)
    {
      $this->numColonne = $numColonne;
      return $this;
    }

}
