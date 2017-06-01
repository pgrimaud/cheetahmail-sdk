<?php
namespace Cheetahmail\Campaigns\ImageHosting;

class AddDirectoryResponse
{

    /**
     * @var boolean $AddDirectoryResult
     */
    protected $AddDirectoryResult = null;

    /**
     * @param boolean $AddDirectoryResult
     */
    public function __construct($AddDirectoryResult)
    {
        $this->AddDirectoryResult = $AddDirectoryResult;
    }

    /**
     * @return boolean
     */
    public function getAddDirectoryResult()
    {
        return $this->AddDirectoryResult;
    }

    /**
     * @param boolean $AddDirectoryResult
     * @return \Cheetahmail\Campaigns\ImageHosting\AddDirectoryResponse
     */
    public function setAddDirectoryResult($AddDirectoryResult)
    {
        $this->AddDirectoryResult = $AddDirectoryResult;
        return $this;
    }
}
