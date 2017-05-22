<?php

namespace Cheetahmail\Data\Subscribers;

class GetFieldByIdResponse
{

    /**
     * @var string $GetFieldByIdResult
     */
    protected $GetFieldByIdResult = null;

    /**
     * @param string $GetFieldByIdResult
     */
    public function __construct($GetFieldByIdResult)
    {
      $this->GetFieldByIdResult = $GetFieldByIdResult;
    }

    /**
     * @return string
     */
    public function getGetFieldByIdResult()
    {
      return $this->GetFieldByIdResult;
    }

    /**
     * @param string $GetFieldByIdResult
     * @return \Cheetahmail\Data\Subscribers\GetFieldByIdResponse
     */
    public function setGetFieldByIdResult($GetFieldByIdResult)
    {
      $this->GetFieldByIdResult = $GetFieldByIdResult;
      return $this;
    }

}
