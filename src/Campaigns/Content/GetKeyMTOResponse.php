<?php
namespace Cheetahmail\Campaigns\Content;

class GetKeyMTOResponse
{

    /**
     * @var ArrayOfArrayOfString $GetKeyMTOResult
     */
    protected $GetKeyMTOResult = null;

    /**
     * @param ArrayOfArrayOfString $GetKeyMTOResult
     */
    public function __construct($GetKeyMTOResult)
    {
        $this->GetKeyMTOResult = $GetKeyMTOResult;
    }

    /**
     * @return ArrayOfArrayOfString
     */
    public function getGetKeyMTOResult()
    {
        return $this->GetKeyMTOResult;
    }

    /**
     * @param ArrayOfArrayOfString $GetKeyMTOResult
     * @return \Cheetahmail\Campaigns\Content\GetKeyMTOResponse
     */
    public function setGetKeyMTOResult($GetKeyMTOResult)
    {
        $this->GetKeyMTOResult = $GetKeyMTOResult;
        return $this;
    }
}
