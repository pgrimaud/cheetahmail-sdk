<?php
namespace Cheetahmail\Campaigns\Configs;

class GetConfig
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
     * @return \Cheetahmail\Campaigns\Configs\GetConfig
     */
    public function setIdConf($idConf)
    {
        $this->idConf = $idConf;
        return $this;
    }
}
