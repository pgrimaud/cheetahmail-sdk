<?php
namespace Cheetahmail\Data\Subscribers;

class GetIdByEmailResponse
{

    /**
     * @var int $GetIdByEmailResult
     */
    protected $GetIdByEmailResult = null;

    /**
     * @param int $GetIdByEmailResult
     */
    public function __construct($GetIdByEmailResult)
    {
        $this->GetIdByEmailResult = $GetIdByEmailResult;
    }

    /**
     * @return int
     */
    public function getGetIdByEmailResult()
    {
        return $this->GetIdByEmailResult;
    }

    /**
     * @param int $GetIdByEmailResult
     * @return \Cheetahmail\Data\Subscribers\GetIdByEmailResponse
     */
    public function setGetIdByEmailResult($GetIdByEmailResult)
    {
        $this->GetIdByEmailResult = $GetIdByEmailResult;
        return $this;
    }
}
