<?php
namespace Cheetahmail\Campaigns\Configs;

class RemoveHeader
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
     * @param int $idconf
     * @param string $key
     */
    public function __construct($idconf, $key)
    {
        $this->idconf = $idconf;
        $this->key = $key;
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
     * @return \Cheetahmail\Campaigns\Configs\RemoveHeader
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
     * @return \Cheetahmail\Campaigns\Configs\RemoveHeader
     */
    public function setKey($key)
    {
        $this->key = $key;
        return $this;
    }
}
