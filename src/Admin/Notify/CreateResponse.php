<?php
namespace Cheetahmail\Admin\Notify;

class CreateResponse
{

    /**
     * @var int $CreateResult
     */
    protected $CreateResult = null;

    /**
     * @param int $CreateResult
     */
    public function __construct($CreateResult)
    {
        $this->CreateResult = $CreateResult;
    }

    /**
     * @return int
     */
    public function getCreateResult()
    {
        return $this->CreateResult;
    }

    /**
     * @param int $CreateResult
     * @return \Cheetahmail\Admin\Notify\CreateResponse
     */
    public function setCreateResult($CreateResult)
    {
        $this->CreateResult = $CreateResult;
        return $this;
    }
}
