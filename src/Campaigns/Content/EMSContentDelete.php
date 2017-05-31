<?php
namespace Cheetahmail\Campaigns\Content;

class EMSContentDelete
{

    /**
     * @var string $contentKey
     */
    protected $contentKey = null;

    /**
     * @var int $containerId
     */
    protected $containerId = null;

    /**
     * @param string $contentKey
     * @param int $containerId
     */
    public function __construct($contentKey, $containerId)
    {
        $this->contentKey = $contentKey;
        $this->containerId = $containerId;
    }

    /**
     * @return string
     */
    public function getContentKey()
    {
        return $this->contentKey;
    }

    /**
     * @param string $contentKey
     * @return \Cheetahmail\Campaigns\Content\EMSContentDelete
     */
    public function setContentKey($contentKey)
    {
        $this->contentKey = $contentKey;
        return $this;
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
     * @return \Cheetahmail\Campaigns\Content\EMSContentDelete
     */
    public function setContainerId($containerId)
    {
        $this->containerId = $containerId;
        return $this;
    }
}
