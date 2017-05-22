<?php
namespace Cheetahmail\Campaigns\ChronoContact;

class CreateTemplateResponse
{

    /**
     * @var int $CreateTemplateResult
     */
    protected $CreateTemplateResult = null;

    /**
     * @param int $CreateTemplateResult
     */
    public function __construct($CreateTemplateResult)
    {
        $this->CreateTemplateResult = $CreateTemplateResult;
    }

    /**
     * @return int
     */
    public function getCreateTemplateResult()
    {
        return $this->CreateTemplateResult;
    }

    /**
     * @param int $CreateTemplateResult
     * @return \Cheetahmail\Campaigns\ChronoContact\CreateTemplateResponse
     */
    public function setCreateTemplateResult($CreateTemplateResult)
    {
        $this->CreateTemplateResult = $CreateTemplateResult;
        return $this;
    }
}
