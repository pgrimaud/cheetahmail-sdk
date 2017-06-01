<?php
namespace Cheetahmail\Campaigns\ImageHosting;

class RenameResponse
{

    /**
     * @var boolean $RenameResult
     */
    protected $RenameResult = null;

    /**
     * @param boolean $RenameResult
     */
    public function __construct($RenameResult)
    {
        $this->RenameResult = $RenameResult;
    }

    /**
     * @return boolean
     */
    public function getRenameResult()
    {
        return $this->RenameResult;
    }

    /**
     * @param boolean $RenameResult
     * @return \Cheetahmail\Campaigns\ImageHosting\RenameResponse
     */
    public function setRenameResult($RenameResult)
    {
        $this->RenameResult = $RenameResult;
        return $this;
    }
}
