<?php
namespace Cheetahmail\Campaigns\Configs;

class SetDomain
{

    /**
     * @var int $idConf
     */
    protected $idConf = null;

    /**
     * @var int $idDomain
     */
    protected $idDomain = null;

    /**
     * @param int $idConf
     * @param int $idDomain
     */
    public function __construct($idConf, $idDomain)
    {
        $this->idConf = $idConf;
        $this->idDomain = $idDomain;
    }

    /**
     * @return int
     */
    public function getIdConf()
    {
        return $this->idConf;
    }

    /**
     * @param int $idConf
     * @return \Cheetahmail\Campaigns\Configs\SetDomain
     */
    public function setIdConf($idConf)
    {
        $this->idConf = $idConf;
        return $this;
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
     * @return \Cheetahmail\Campaigns\Configs\SetDomain
     */
    public function setIdDomain($idDomain)
    {
        $this->idDomain = $idDomain;
        return $this;
    }
}
