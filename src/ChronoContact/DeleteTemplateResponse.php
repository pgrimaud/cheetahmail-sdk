<?php

namespace Cheetahmail\ChronoContact;

class DeleteTemplateResponse
{

    /**
     * @var boolean $DeleteTemplateResult
     */
    protected $DeleteTemplateResult = null;

    /**
     * @param boolean $DeleteTemplateResult
     */
    public function __construct($DeleteTemplateResult)
    {
        $this->DeleteTemplateResult = $DeleteTemplateResult;
    }

    /**
     * @return boolean
     */
    public function getDeleteTemplateResult()
    {
        return $this->DeleteTemplateResult;
    }

    /**
     * @param boolean $DeleteTemplateResult
     * @return \Cheetahmail\ChronoContact\DeleteTemplateResponse
     */
    public function setDeleteTemplateResult($DeleteTemplateResult)
    {
        $this->DeleteTemplateResult = $DeleteTemplateResult;
        return $this;
    }
}
