<?php
namespace Cheetahmail\Campaigns\Configs;

class AddHeader
{

    /**
     * @var int $idconf
     */
    protected $idconf = null;

    /**
     * @var string $key
     */
    protected $key = null;

    /**
     * @var string $value
     */
    protected $value = null;

    /**
     * @param int $idconf
     * @param string $key
     * @param string $value
     */
    public function __construct($idconf, $key, $value)
    {
        $this->idconf = $idconf;
        $this->key = $key;
        $this->value = $value;
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
     * @return \Cheetahmail\Campaigns\Configs\AddHeader
     */
    public function setIdconf($idconf)
    {
        $this->idconf = $idconf;
        return $this;
    }

    /**
     * @return string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * @param string $key
     * @return \Cheetahmail\Campaigns\Configs\AddHeader
     */
    public function setKey($key)
    {
        $this->key = $key;
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
     * @return \Cheetahmail\Campaigns\Configs\AddHeader
     */
    public function setValue($value)
    {
        $this->value = $value;
        return $this;
    }
}
