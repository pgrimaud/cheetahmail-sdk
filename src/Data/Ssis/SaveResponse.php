<?php
namespace Cheetahmail\Data\Ssis;

class SaveResponse
{

    /**
     * @var boolean $SaveResult
     */
    protected $SaveResult = null;

    /**
     * @param boolean $SaveResult
     */
    public function __construct($SaveResult)
    {
        $this->SaveResult = $SaveResult;
    }

    /**
     * @return boolean
     */
    public function getSaveResult()
    {
        return $this->SaveResult;
    }

    /**
     * @param boolean $SaveResult
     * @return \Cheetahmail\Data\Ssis\SaveResponse
     */
    public function setSaveResult($SaveResult)
    {
        $this->SaveResult = $SaveResult;
        return $this;
    }
}
