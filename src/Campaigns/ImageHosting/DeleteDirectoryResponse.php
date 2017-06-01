<?php
namespace Cheetahmail\Campaigns\ImageHosting;

class DeleteDirectoryResponse
{

    /**
     * @var boolean $DeleteDirectoryResult
     */
    protected $DeleteDirectoryResult = null;

    /**
     * @param boolean $DeleteDirectoryResult
     */
    public function __construct($DeleteDirectoryResult)
    {
        $this->DeleteDirectoryResult = $DeleteDirectoryResult;
    }

    /**
     * @return boolean
     */
    public function getDeleteDirectoryResult()
    {
        return $this->DeleteDirectoryResult;
    }

    /**
     * @param boolean $DeleteDirectoryResult
     * @return \Cheetahmail\Campaigns\ImageHosting\DeleteDirectoryResponse
     */
    public function setDeleteDirectoryResult($DeleteDirectoryResult)
    {
        $this->DeleteDirectoryResult = $DeleteDirectoryResult;
        return $this;
    }
}
