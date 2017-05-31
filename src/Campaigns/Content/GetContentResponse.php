<?php
namespace Cheetahmail\Campaigns\Content;

class GetContentResponse
{

    /**
     * @var ArrayOfArrayOfString $GetContentResult
     */
    protected $GetContentResult = null;

    /**
     * @param ArrayOfArrayOfString $GetContentResult
     */
    public function __construct($GetContentResult)
    {
        $this->GetContentResult = $GetContentResult;
    }

    /**
     * @return ArrayOfArrayOfString
     */
    public function getGetContentResult()
    {
        return $this->GetContentResult;
    }

    /**
     * @param ArrayOfArrayOfString $GetContentResult
     * @return \Cheetahmail\Campaigns\Content\GetContentResponse
     */
    public function setGetContentResult($GetContentResult)
    {
        $this->GetContentResult = $GetContentResult;
        return $this;
    }
}
