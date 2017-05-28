<?php
namespace Cheetahmail\Campaigns\Configs;

class SetDefaultConfig
{

    /**
     * @var int $idconf
     */
    protected $idconf = null;

    /**
     * @param int $idconf
     */
    public function __construct($idconf)
    {
        $this->idconf = $idconf;
    }

    /**
     * @return int
     */
    public function getIdconf()
    {
        return $this->idconf;
    }

    /**
     * @param int $idconf
     * @return \Cheetahmail\Campaigns\Configs\SetDefaultConfig
     */
    public function setIdconf($idconf)
    {
        $this->idconf = $idconf;
        return $this;
    }
}
