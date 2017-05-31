<?php
namespace Cheetahmail\Campaigns\Content;

class GetContainerResponse
{

    /**
     * @var ArrayOfArrayOfString $GetContainerResult
     */
    protected $GetContainerResult = null;

    /**
     * @param ArrayOfArrayOfString $GetContainerResult
     */
    public function __construct($GetContainerResult)
    {
        $this->GetContainerResult = $GetContainerResult;
    }

    /**
     * @return ArrayOfArrayOfString
     */
    public function getGetContainerResult()
    {
        return $this->GetContainerResult;
    }

    /**
     * @param ArrayOfArrayOfString $GetContainerResult
     * @return \Cheetahmail\Campaigns\Content\GetContainerResponse
     */
    public function setGetContainerResult($GetContainerResult)
    {
        $this->GetContainerResult = $GetContainerResult;
        return $this;
    }
}
