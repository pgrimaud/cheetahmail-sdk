<?php
namespace Cheetahmail\Campaigns\Content;

class GetReferenceKeyByContainerResponse
{

    /**
     * @var ArrayOfString $GetReferenceKeyByContainerResult
     */
    protected $GetReferenceKeyByContainerResult = null;

    /**
     * @param ArrayOfString $GetReferenceKeyByContainerResult
     */
    public function __construct($GetReferenceKeyByContainerResult)
    {
        $this->GetReferenceKeyByContainerResult = $GetReferenceKeyByContainerResult;
    }

    /**
     * @return ArrayOfString
     */
    public function getGetReferenceKeyByContainerResult()
    {
        return $this->GetReferenceKeyByContainerResult;
    }

    /**
     * @param ArrayOfString $GetReferenceKeyByContainerResult
     * @return \Cheetahmail\Campaigns\Content\GetReferenceKeyByContainerResponse
     */
    public function setGetReferenceKeyByContainerResult($GetReferenceKeyByContainerResult)
    {
        $this->GetReferenceKeyByContainerResult = $GetReferenceKeyByContainerResult;
        return $this;
    }
}
