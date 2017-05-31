<?php
namespace Cheetahmail\Campaigns\Content;

class GetKeyOTMResponse
{

    /**
     * @var ArrayOfArrayOfString $GetKeyOTMResult
     */
    protected $GetKeyOTMResult = null;

    /**
     * @param ArrayOfArrayOfString $GetKeyOTMResult
     */
    public function __construct($GetKeyOTMResult)
    {
        $this->GetKeyOTMResult = $GetKeyOTMResult;
    }

    /**
     * @return ArrayOfArrayOfString
     */
    public function getGetKeyOTMResult()
    {
        return $this->GetKeyOTMResult;
    }

    /**
     * @param ArrayOfArrayOfString $GetKeyOTMResult
     * @return \Cheetahmail\Campaigns\Content\GetKeyOTMResponse
     */
    public function setGetKeyOTMResult($GetKeyOTMResult)
    {
        $this->GetKeyOTMResult = $GetKeyOTMResult;
        return $this;
    }
}
