<?php
namespace Cheetahmail\Campaigns\Configs;

class SetDomainResponse
{

    /**
     * @var boolean $SetDomainResult
     */
    protected $SetDomainResult = null;

    /**
     * @param boolean $SetDomainResult
     */
    public function __construct($SetDomainResult)
    {
        $this->SetDomainResult = $SetDomainResult;
    }

    /**
     * @return boolean
     */
    public function getSetDomainResult()
    {
        return $this->SetDomainResult;
    }

    /**
     * @param boolean $SetDomainResult
     * @return \Cheetahmail\Campaigns\Configs\SetDomainResponse
     */
    public function setSetDomainResult($SetDomainResult)
    {
        $this->SetDomainResult = $SetDomainResult;
        return $this;
    }
}
