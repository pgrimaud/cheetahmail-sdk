<?php
namespace Cheetahmail\Campaigns\ImageHosting;

class RenameDirectoryResponse
{

    /**
     * @var boolean $RenameDirectoryResult
     */
    protected $RenameDirectoryResult = null;

    /**
     * @param boolean $RenameDirectoryResult
     */
    public function __construct($RenameDirectoryResult)
    {
        $this->RenameDirectoryResult = $RenameDirectoryResult;
    }

    /**
     * @return boolean
     */
    public function getRenameDirectoryResult()
    {
        return $this->RenameDirectoryResult;
    }

    /**
     * @param boolean $RenameDirectoryResult
     * @return \Cheetahmail\Campaigns\ImageHosting\RenameDirectoryResponse
     */
    public function setRenameDirectoryResult($RenameDirectoryResult)
    {
        $this->RenameDirectoryResult = $RenameDirectoryResult;
        return $this;
    }
}
