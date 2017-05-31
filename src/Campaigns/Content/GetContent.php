<?php
namespace Cheetahmail\Campaigns\Content;

class GetContent
{

    /**
     * @var int $containerId
     */
    protected $containerId = null;

    /**
     * @var string $contentKey
     */
    protected $contentKey = null;

    /**
     * @param int $containerId
     * @param string $contentKey
     */
    public function __construct($containerId, $contentKey)
    {
        $this->containerId = $containerId;
        $this->contentKey = $contentKey;
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
     * @return \Cheetahmail\Campaigns\Content\GetContent
     */
    public function setContainerId($containerId)
    {
        $this->containerId = $containerId;
        return $this;
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
     * @return \Cheetahmail\Campaigns\Content\GetContent
     */
    public function setContentKey($contentKey)
    {
        $this->contentKey = $contentKey;
        return $this;
    }
}
