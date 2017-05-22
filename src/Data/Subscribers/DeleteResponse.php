<?php

namespace Cheetahmail\Data\Subscribers;

class DeleteResponse
{

    /**
     * @var boolean $DeleteResult
     */
    protected $DeleteResult = null;

    /**
     * @param boolean $DeleteResult
     */
    public function __construct($DeleteResult)
    {
      $this->DeleteResult = $DeleteResult;
    }

    /**
     * @return boolean
     */
    public function getDeleteResult()
    {
      return $this->DeleteResult;
    }

    /**
     * @param boolean $DeleteResult
     * @return \Cheetahmail\Data\Subscribers\DeleteResponse
     */
    public function setDeleteResult($DeleteResult)
    {
      $this->DeleteResult = $DeleteResult;
      return $this;
    }

}
