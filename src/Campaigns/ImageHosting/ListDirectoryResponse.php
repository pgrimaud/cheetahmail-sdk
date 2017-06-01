<?php
namespace Cheetahmail\Campaigns\ImageHosting;

class ListDirectoryResponse
{

    /**
     * @var ArrayOfString $ListDirectoryResult
     */
    protected $ListDirectoryResult = null;

    /**
     * @param ArrayOfString $ListDirectoryResult
     */
    public function __construct($ListDirectoryResult)
    {
        $this->ListDirectoryResult = $ListDirectoryResult;
    }

    /**
     * @return ArrayOfString
     */
    public function getListDirectoryResult()
    {
        return $this->ListDirectoryResult;
    }

    /**
     * @param ArrayOfString $ListDirectoryResult
     * @return \Cheetahmail\Campaigns\ImageHosting\ListDirectoryResponse
     */
    public function setListDirectoryResult($ListDirectoryResult)
    {
        $this->ListDirectoryResult = $ListDirectoryResult;
        return $this;
    }
}
