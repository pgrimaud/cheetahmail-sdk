<?php
namespace Cheetahmail\Data\Ssis;

class SetFieldsResponse
{

    /**
     * @var boolean $SetFieldsResult
     */
    protected $SetFieldsResult = null;

    /**
     * @param boolean $SetFieldsResult
     */
    public function __construct($SetFieldsResult)
    {
        $this->SetFieldsResult = $SetFieldsResult;
    }

    /**
     * @return boolean
     */
    public function getSetFieldsResult()
    {
        return $this->SetFieldsResult;
    }

    /**
     * @param boolean $SetFieldsResult
     * @return \Cheetahmail\Data\Ssis\SetFieldsResponse
     */
    public function setSetFieldsResult($SetFieldsResult)
    {
        $this->SetFieldsResult = $SetFieldsResult;
        return $this;
    }
}
