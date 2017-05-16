<?php

namespace Cheetahmail\ChronoContact;

class ModifyTemplateResponse
{

    /**
     * @var boolean $ModifyTemplateResult
     */
    protected $ModifyTemplateResult = null;

    /**
     * @param boolean $ModifyTemplateResult
     */
    public function __construct($ModifyTemplateResult)
    {
        $this->ModifyTemplateResult = $ModifyTemplateResult;
    }

    /**
     * @return boolean
     */
    public function getModifyTemplateResult()
    {
        return $this->ModifyTemplateResult;
    }

    /**
     * @param boolean $ModifyTemplateResult
     * @return \Cheetahmail\ChronoContact\ModifyTemplateResponse
     */
    public function setModifyTemplateResult($ModifyTemplateResult)
    {
        $this->ModifyTemplateResult = $ModifyTemplateResult;
        return $this;
    }
}
