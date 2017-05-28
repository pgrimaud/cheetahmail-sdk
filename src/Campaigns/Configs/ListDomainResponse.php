<?php
namespace Cheetahmail\Campaigns\Configs;

class ListDomainResponse
{

    /**
     * @var ArrayOfDomain $ListDomainResult
     */
    protected $ListDomainResult = null;

    /**
     * @param ArrayOfDomain $ListDomainResult
     */
    public function __construct($ListDomainResult)
    {
        $this->ListDomainResult = $ListDomainResult;
    }

    /**
     * @return ArrayOfDomain
     */
    public function getListDomainResult()
    {
        return $this->ListDomainResult;
    }

    /**
     * @param ArrayOfDomain $ListDomainResult
     * @return \Cheetahmail\Campaigns\Configs\ListDomainResponse
     */
    public function setListDomainResult($ListDomainResult)
    {
        $this->ListDomainResult = $ListDomainResult;
        return $this;
    }
}
