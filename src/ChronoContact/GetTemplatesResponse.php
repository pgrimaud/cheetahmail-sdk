<?php

namespace Cheetahmail\ChronoContact;

class GetTemplatesResponse
{

    /**
     * @var ArrayOfArrayOfString $GetTemplatesResult
     */
    protected $GetTemplatesResult = null;

    /**
     * @param ArrayOfArrayOfString $GetTemplatesResult
     */
    public function __construct($GetTemplatesResult)
    {
        $this->GetTemplatesResult = $GetTemplatesResult;
    }

    /**
     * @return ArrayOfArrayOfString
     */
    public function getGetTemplatesResult()
    {
        return $this->GetTemplatesResult;
    }

    /**
     * @param ArrayOfArrayOfString $GetTemplatesResult
     * @return \Cheetahmail\ChronoContact\GetTemplatesResponse
     */
    public function setGetTemplatesResult($GetTemplatesResult)
    {
        $this->GetTemplatesResult = $GetTemplatesResult;
        return $this;
    }
}
