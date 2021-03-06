<?php
namespace Cheetahmail\Data\Filters;

class ListResponse
{

    /**
     * @var ArrayOfString $ListResult
     */
    protected $ListResult = null;

    /**
     * @param ArrayOfString $ListResult
     */
    public function __construct($ListResult)
    {
        $this->ListResult = $ListResult;
    }

    /**
     * @return ArrayOfString
     */
    public function getListResult()
    {
        return $this->ListResult;
    }

    /**
     * @param ArrayOfString $ListResult
     * @return \Cheetahmail\Data\Filters\ListResponse
     */
    public function setListResult($ListResult)
    {
        $this->ListResult = $ListResult;
        return $this;
    }
}
