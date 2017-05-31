<?php
namespace Cheetahmail\Campaigns\Content;

class GetCorrespondanceMTOResponse
{

    /**
     * @var ArrayOfArrayOfString $GetCorrespondanceMTOResult
     */
    protected $GetCorrespondanceMTOResult = null;

    /**
     * @param ArrayOfArrayOfString $GetCorrespondanceMTOResult
     */
    public function __construct($GetCorrespondanceMTOResult)
    {
        $this->GetCorrespondanceMTOResult = $GetCorrespondanceMTOResult;
    }

    /**
     * @return ArrayOfArrayOfString
     */
    public function getGetCorrespondanceMTOResult()
    {
        return $this->GetCorrespondanceMTOResult;
    }

    /**
     * @param ArrayOfArrayOfString $GetCorrespondanceMTOResult
     * @return \Cheetahmail\Campaigns\Content\GetCorrespondanceMTOResponse
     */
    public function setGetCorrespondanceMTOResult($GetCorrespondanceMTOResult)
    {
        $this->GetCorrespondanceMTOResult = $GetCorrespondanceMTOResult;
        return $this;
    }
}
