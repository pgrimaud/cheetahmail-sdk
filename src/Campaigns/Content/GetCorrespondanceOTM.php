<?php
namespace Cheetahmail\Campaigns\Content;

class GetCorrespondanceOTM
{

    /**
     * @var int $containerId
     */
    protected $containerId = null;

    /**
     * @var string $key
     */
    protected $key = null;

    /**
     * @param int $containerId
     * @param string $key
     */
    public function __construct($containerId, $key)
    {
        $this->containerId = $containerId;
        $this->key = $key;
    }

    /**
     * @return int
     */
    public function getContainerId()
    {
        return $this->containerId;
    }

    /**
     * @param int $containerId
     * @return \Cheetahmail\Campaigns\Content\GetCorrespondanceOTM
     */
    public function setContainerId($containerId)
    {
        $this->containerId = $containerId;
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
     * @return \Cheetahmail\Campaigns\Content\GetCorrespondanceOTM
     */
    public function setKey($key)
    {
        $this->key = $key;
        return $this;
    }
}
