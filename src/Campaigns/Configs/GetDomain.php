<?php
namespace Cheetahmail\Campaigns\Configs;

class GetDomain
{

    /**
     * @var int $idConf
     */
    protected $idConf = null;

    /**
     * @param int $idConf
     */
    public function __construct($idConf)
    {
        $this->idConf = $idConf;
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
     * @return \Cheetahmail\Campaigns\Configs\GetDomain
     */
    public function setIdConf($idConf)
    {
        $this->idConf = $idConf;
        return $this;
    }
}
