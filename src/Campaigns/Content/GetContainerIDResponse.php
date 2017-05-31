<?php
namespace Cheetahmail\Campaigns\Content;

class GetContainerIDResponse
{

    /**
     * @var ArrayOfInt $GetContainerIDResult
     */
    protected $GetContainerIDResult = null;

    /**
     * @param ArrayOfInt $GetContainerIDResult
     */
    public function __construct($GetContainerIDResult)
    {
        $this->GetContainerIDResult = $GetContainerIDResult;
    }

    /**
     * @return ArrayOfInt
     */
    public function getGetContainerIDResult()
    {
        return $this->GetContainerIDResult;
    }

    /**
     * @param ArrayOfInt $GetContainerIDResult
     * @return \Cheetahmail\Campaigns\Content\GetContainerIDResponse
     */
    public function setGetContainerIDResult($GetContainerIDResult)
    {
        $this->GetContainerIDResult = $GetContainerIDResult;
        return $this;
    }
}
