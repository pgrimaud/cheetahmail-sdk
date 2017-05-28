<?php
namespace Cheetahmail\Campaigns\Configs;

class DeleteConfig
{

    /**
     * @var int $_IdConf
     */
    protected $_IdConf = null;

    /**
     * @param int $_IdConf
     */
    public function __construct($_IdConf)
    {
        $this->_IdConf = $_IdConf;
    }

    /**
     * @return int
     */
    public function get_IdConf()
    {
        return $this->_IdConf;
    }

    /**
     * @param int $_IdConf
     * @return \Cheetahmail\Campaigns\Configs\DeleteConfig
     */
    public function set_IdConf($_IdConf)
    {
        $this->_IdConf = $_IdConf;
        return $this;
    }
}
