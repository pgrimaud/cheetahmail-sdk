<?php

namespace Cheetahmail\Data\Subscribers;

class GetByEmailResponse
{

    /**
     * @var string $GetByEmailResult
     */
    protected $GetByEmailResult = null;

    /**
     * @param string $GetByEmailResult
     */
    public function __construct($GetByEmailResult)
    {
      $this->GetByEmailResult = $GetByEmailResult;
    }

    /**
     * @return string
     */
    public function getGetByEmailResult()
    {
      return $this->GetByEmailResult;
    }

    /**
     * @param string $GetByEmailResult
     * @return \Cheetahmail\Data\Subscribers\GetByEmailResponse
     */
    public function setGetByEmailResult($GetByEmailResult)
    {
      $this->GetByEmailResult = $GetByEmailResult;
      return $this;
    }

}
