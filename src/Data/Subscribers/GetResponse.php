<?php
namespace Cheetahmail\Data\Subscribers;

class GetResponse
{

    /**
     * @var ArrayOfArrayOfString $GetResult
     */
    protected $GetResult = null;

    /**
     * @param ArrayOfArrayOfString $GetResult
     */
    public function __construct($GetResult)
    {
        $this->GetResult = $GetResult;
    }

    /**
     * @return ArrayOfArrayOfString
     */
    public function getGetResult()
    {
        return $this->GetResult;
    }

    /**
     * @param ArrayOfArrayOfString $GetResult
     * @return \Cheetahmail\Data\Subscribers\GetResponse
     */
    public function setGetResult($GetResult)
    {
        $this->GetResult = $GetResult;
        return $this;
    }
}
