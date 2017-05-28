<?php
namespace Cheetahmail\Campaigns\Configs;

class EnableListUnsubscribe
{

    /**
     * @var int $idconf
     */
    protected $idconf = null;

    /**
     * @var boolean $isEnable
     */
    protected $isEnable = null;

    /**
     * @param int $idconf
     * @param boolean $isEnable
     */
    public function __construct($idconf, $isEnable)
    {
        $this->idconf = $idconf;
        $this->isEnable = $isEnable;
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
     * @return \Cheetahmail\Campaigns\Configs\EnableListUnsubscribe
     */
    public function setIdconf($idconf)
    {
        $this->idconf = $idconf;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsEnable()
    {
        return $this->isEnable;
    }

    /**
     * @param boolean $isEnable
     * @return \Cheetahmail\Campaigns\Configs\EnableListUnsubscribe
     */
    public function setIsEnable($isEnable)
    {
        $this->isEnable = $isEnable;
        return $this;
    }
}
