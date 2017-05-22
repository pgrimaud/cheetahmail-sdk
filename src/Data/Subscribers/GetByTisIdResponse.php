<?php
namespace Cheetahmail\Data\Subscribers;

class GetByTisIdResponse
{

    /**
     * @var ArrayOfArrayOfString $GetByTisIdResult
     */
    protected $GetByTisIdResult = null;

    /**
     * @param ArrayOfArrayOfString $GetByTisIdResult
     */
    public function __construct($GetByTisIdResult)
    {
        $this->GetByTisIdResult = $GetByTisIdResult;
    }

    /**
     * @return ArrayOfArrayOfString
     */
    public function getGetByTisIdResult()
    {
        return $this->GetByTisIdResult;
    }

    /**
     * @param ArrayOfArrayOfString $GetByTisIdResult
     * @return \Cheetahmail\Data\Subscribers\GetByTisIdResponse
     */
    public function setGetByTisIdResult($GetByTisIdResult)
    {
        $this->GetByTisIdResult = $GetByTisIdResult;
        return $this;
    }
}
