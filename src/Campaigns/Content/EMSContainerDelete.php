<?php
namespace Cheetahmail\Campaigns\Content;

class EMSContainerDelete
{

    /**
     * @var int $containerId
     */
    protected $containerId = null;

    /**
     * @param int $containerId
     */
    public function __construct($containerId)
    {
        $this->containerId = $containerId;
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
     * @return \Cheetahmail\Campaigns\Content\EMSContainerDelete
     */
    public function setContainerId($containerId)
    {
        $this->containerId = $containerId;
        return $this;
    }
}
