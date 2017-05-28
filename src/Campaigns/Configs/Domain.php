<?php
namespace Cheetahmail\Campaigns\Configs;

class Domain
{

    /**
     * @var int $idDomain
     */
    protected $idDomain = null;

    /**
     * @var string $DomainName
     */
    protected $DomainName = null;

    /**
     * @param int $idDomain
     */
    public function __construct($idDomain)
    {
        $this->idDomain = $idDomain;
    }

    /**
     * @return int
     */
    public function getIdDomain()
    {
        return $this->idDomain;
    }

    /**
     * @param int $idDomain
     * @return \Cheetahmail\Campaigns\Configs\Domain
     */
    public function setIdDomain($idDomain)
    {
        $this->idDomain = $idDomain;
        return $this;
    }

    /**
     * @return string
     */
    public function getDomainName()
    {
        return $this->DomainName;
    }

    /**
     * @param string $DomainName
     * @return \Cheetahmail\Campaigns\Configs\Domain
     */
    public function setDomainName($DomainName)
    {
        $this->DomainName = $DomainName;
        return $this;
    }
}
