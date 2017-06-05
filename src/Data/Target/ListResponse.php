<?php
namespace Cheetahmail\Data\Target;

class ListResponse
{

    /**
     * @var ArrayOfTargetEntityReturn $ListResult
     */
    protected $ListResult = null;

    /**
     * @param ArrayOfTargetEntityReturn $ListResult
     */
    public function __construct($ListResult)
    {
        $this->ListResult = $ListResult;
    }

    /**
     * @return ArrayOfTargetEntityReturn
     */
    public function getListResult()
    {
        return $this->ListResult;
    }

    /**
     * @param ArrayOfTargetEntityReturn $ListResult
     * @return \Cheetahmail\Data\Target\ListResponse
     */
    public function setListResult($ListResult)
    {
        $this->ListResult = $ListResult;
        return $this;
    }
}
