<?php
namespace Cheetahmail\Campaigns\Configs;

class ListConfig
{

    /**
     * @var TypeConfig $typeConf
     */
    protected $typeConf = null;

    /**
     * @param TypeConfig $typeConf
     */
    public function __construct($typeConf)
    {
        $this->typeConf = $typeConf;
    }

    /**
     * @return TypeConfig
     */
    public function getTypeConf()
    {
        return $this->typeConf;
    }

    /**
     * @param TypeConfig $typeConf
     * @return \Cheetahmail\Campaigns\Configs\ListConfig
     */
    public function setTypeConf($typeConf)
    {
        $this->typeConf = $typeConf;
        return $this;
    }
}
