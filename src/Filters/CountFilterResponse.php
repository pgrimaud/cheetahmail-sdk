<?php

namespace Cheetahmail\Filters;

class CountFilterResponse
{

    /**
     * @var int $CountFilterResult
     */
    protected $CountFilterResult = null;

    /**
     * @param int $CountFilterResult
     */
    public function __construct($CountFilterResult)
    {
      $this->CountFilterResult = $CountFilterResult;
    }

    /**
     * @return int
     */
    public function getCountFilterResult()
    {
      return $this->CountFilterResult;
    }

    /**
     * @param int $CountFilterResult
     * @return \Cheetahmail\Filters\CountFilterResponse
     */
    public function setCountFilterResult($CountFilterResult)
    {
      $this->CountFilterResult = $CountFilterResult;
      return $this;
    }

}
