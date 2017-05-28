<?php
namespace Cheetahmail\Campaigns\Configs;

class Header
{

    /**
     * @var string $Key
     */
    protected $Key = null;

    /**
     * @var string $value
     */
    protected $value = null;

    
    public function __construct()
    {
    }

    /**
     * @return string
     */
    public function getKey()
    {
        return $this->Key;
    }

    /**
     * @param string $Key
     * @return \Cheetahmail\Campaigns\Configs\Header
     */
    public function setKey($Key)
    {
        $this->Key = $Key;
        return $this;
    }

    /**
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param string $value
     * @return \Cheetahmail\Campaigns\Configs\Header
     */
    public function setValue($value)
    {
        $this->value = $value;
        return $this;
    }
}
