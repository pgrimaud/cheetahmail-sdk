<?php
namespace Cheetahmail\Campaigns\ImageHosting;

class AddResponse
{

    /**
     * @var boolean $AddResult
     */
    protected $AddResult = null;

    /**
     * @param boolean $AddResult
     */
    public function __construct($AddResult)
    {
        $this->AddResult = $AddResult;
    }

    /**
     * @return boolean
     */
    public function getAddResult()
    {
        return $this->AddResult;
    }

    /**
     * @param boolean $AddResult
     * @return \Cheetahmail\Campaigns\ImageHosting\AddResponse
     */
    public function setAddResult($AddResult)
    {
        $this->AddResult = $AddResult;
        return $this;
    }
}
