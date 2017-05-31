<?php
namespace Cheetahmail\Campaigns\Content;

class GetCorrespondanceOTMResponse
{

    /**
     * @var ArrayOfArrayOfString $GetCorrespondanceOTMResult
     */
    protected $GetCorrespondanceOTMResult = null;

    /**
     * @param ArrayOfArrayOfString $GetCorrespondanceOTMResult
     */
    public function __construct($GetCorrespondanceOTMResult)
    {
        $this->GetCorrespondanceOTMResult = $GetCorrespondanceOTMResult;
    }

    /**
     * @return ArrayOfArrayOfString
     */
    public function getGetCorrespondanceOTMResult()
    {
        return $this->GetCorrespondanceOTMResult;
    }

    /**
     * @param ArrayOfArrayOfString $GetCorrespondanceOTMResult
     * @return \Cheetahmail\Campaigns\Content\GetCorrespondanceOTMResponse
     */
    public function setGetCorrespondanceOTMResult($GetCorrespondanceOTMResult)
    {
        $this->GetCorrespondanceOTMResult = $GetCorrespondanceOTMResult;
        return $this;
    }
}
