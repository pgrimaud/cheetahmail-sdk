<?php

namespace Cheetahmail\Filters;

class GetFieldsResponse
{

    /**
     * @var ArrayOfCriterion $GetFieldsResult
     */
    protected $GetFieldsResult = null;

    /**
     * @param ArrayOfCriterion $GetFieldsResult
     */
    public function __construct($GetFieldsResult)
    {
      $this->GetFieldsResult = $GetFieldsResult;
    }

    /**
     * @return ArrayOfCriterion
     */
    public function getGetFieldsResult()
    {
      return $this->GetFieldsResult;
    }

    /**
     * @param ArrayOfCriterion $GetFieldsResult
     * @return \Cheetahmail\Filters\GetFieldsResponse
     */
    public function setGetFieldsResult($GetFieldsResult)
    {
      $this->GetFieldsResult = $GetFieldsResult;
      return $this;
    }

}
