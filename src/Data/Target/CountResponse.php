<?php
namespace Cheetahmail\Data\Target;

class CountResponse
{

    /**
     * @var int $CountResult
     */
    protected $CountResult = null;

    /**
     * @param int $CountResult
     */
    public function __construct($CountResult)
    {
        $this->CountResult = $CountResult;
    }

    /**
     * @return int
     */
    public function getCountResult()
    {
        return $this->CountResult;
    }

    /**
     * @param int $CountResult
     * @return \Cheetahmail\Data\Target\CountResponse
     */
    public function setCountResult($CountResult)
    {
        $this->CountResult = $CountResult;
        return $this;
    }
}
