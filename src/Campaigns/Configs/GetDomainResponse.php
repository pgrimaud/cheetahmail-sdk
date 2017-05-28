<?php
namespace Cheetahmail\Campaigns\Configs;

class GetDomainResponse
{

    /**
     * @var Domain $GetDomainResult
     */
    protected $GetDomainResult = null;

    /**
     * @param Domain $GetDomainResult
     */
    public function __construct($GetDomainResult)
    {
        $this->GetDomainResult = $GetDomainResult;
    }

    /**
     * @return Domain
     */
    public function getGetDomainResult()
    {
        return $this->GetDomainResult;
    }

    /**
     * @param Domain $GetDomainResult
     * @return \Cheetahmail\Campaigns\Configs\GetDomainResponse
     */
    public function setGetDomainResult($GetDomainResult)
    {
        $this->GetDomainResult = $GetDomainResult;
        return $this;
    }
}
