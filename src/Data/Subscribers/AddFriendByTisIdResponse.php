<?php

namespace Cheetahmail\Data\Subscribers;

class AddFriendByTisIdResponse
{

    /**
     * @var boolean $AddFriendByTisIdResult
     */
    protected $AddFriendByTisIdResult = null;

    /**
     * @param boolean $AddFriendByTisIdResult
     */
    public function __construct($AddFriendByTisIdResult)
    {
      $this->AddFriendByTisIdResult = $AddFriendByTisIdResult;
    }

    /**
     * @return boolean
     */
    public function getAddFriendByTisIdResult()
    {
      return $this->AddFriendByTisIdResult;
    }

    /**
     * @param boolean $AddFriendByTisIdResult
     * @return \Cheetahmail\Data\Subscribers\AddFriendByTisIdResponse
     */
    public function setAddFriendByTisIdResult($AddFriendByTisIdResult)
    {
      $this->AddFriendByTisIdResult = $AddFriendByTisIdResult;
      return $this;
    }

}
