<?php
namespace Cheetahmail\Campaigns\Configs;

class CreateConfig
{

    /**
     * @var ConfigDetails $_config
     */
    protected $_config = null;

    /**
     * @param ConfigDetails $_config
     */
    public function __construct($_config)
    {
        $this->_config = $_config;
    }

    /**
     * @return ConfigDetails
     */
    public function get_config()
    {
        return $this->_config;
    }

    /**
     * @param ConfigDetails $_config
     * @return \Cheetahmail\Campaigns\Configs\CreateConfig
     */
    public function set_config($_config)
    {
        $this->_config = $_config;
        return $this;
    }
}
