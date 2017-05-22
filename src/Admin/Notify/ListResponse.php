<?php
namespace Cheetahmail\Admin\Notify;

class ListResponse
{

    /**
     * @var ArrayOfNotifyGrp $ListResult
     */
    protected $ListResult = null;

    /**
     * @param ArrayOfNotifyGrp $ListResult
     */
    public function __construct($ListResult)
    {
        $this->ListResult = $ListResult;
    }

    /**
     * @return ArrayOfNotifyGrp
     */
    public function getListResult()
    {
        return $this->ListResult;
    }

    /**
     * @param ArrayOfNotifyGrp $ListResult
     * @return \Cheetahmail\Admin\Notify\ListResponse
     */
    public function setListResult($ListResult)
    {
        $this->ListResult = $ListResult;
        return $this;
    }
}
