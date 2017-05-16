<?php

namespace Cheetahmail\ChronoContact;

class GetTemplateResponse
{

    /**
     * @var Template $GetTemplateResult
     */
    protected $GetTemplateResult = null;

    /**
     * @param Template $GetTemplateResult
     */
    public function __construct($GetTemplateResult)
    {
        $this->GetTemplateResult = $GetTemplateResult;
    }

    /**
     * @return Template
     */
    public function getGetTemplateResult()
    {
        return $this->GetTemplateResult;
    }

    /**
     * @param Template $GetTemplateResult
     * @return \Cheetahmail\ChronoContact\GetTemplateResponse
     */
    public function setGetTemplateResult($GetTemplateResult)
    {
        $this->GetTemplateResult = $GetTemplateResult;
        return $this;
    }
}
