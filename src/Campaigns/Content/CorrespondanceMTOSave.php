<?php
namespace Cheetahmail\Campaigns\Content;

class CorrespondanceMTOSave
{

    /**
     * @var string $contentKey
     */
    protected $contentKey = null;

    /**
     * @var string $contentKeyCorrespondance
     */
    protected $contentKeyCorrespondance = null;

    /**
     * @var int $containerId
     */
    protected $containerId = null;

    /**
     * @var int $correspondanceType
     */
    protected $correspondanceType = null;

    /**
     * @var int $state
     */
    protected $state = null;

    /**
     * @param string $contentKey
     * @param string $contentKeyCorrespondance
     * @param int $containerId
     * @param int $correspondanceType
     * @param int $state
     */
    public function __construct($contentKey, $contentKeyCorrespondance, $containerId, $correspondanceType, $state)
    {
        $this->contentKey = $contentKey;
        $this->contentKeyCorrespondance = $contentKeyCorrespondance;
        $this->containerId = $containerId;
        $this->correspondanceType = $correspondanceType;
        $this->state = $state;
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
     * @return \Cheetahmail\Campaigns\Content\CorrespondanceMTOSave
     */
    public function setContentKey($contentKey)
    {
        $this->contentKey = $contentKey;
        return $this;
    }

    /**
     * @return string
     */
    public function getContentKeyCorrespondance()
    {
        return $this->contentKeyCorrespondance;
    }

    /**
     * @param string $contentKeyCorrespondance
     * @return \Cheetahmail\Campaigns\Content\CorrespondanceMTOSave
     */
    public function setContentKeyCorrespondance($contentKeyCorrespondance)
    {
        $this->contentKeyCorrespondance = $contentKeyCorrespondance;
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
     * @return \Cheetahmail\Campaigns\Content\CorrespondanceMTOSave
     */
    public function setContainerId($containerId)
    {
        $this->containerId = $containerId;
        return $this;
    }

    /**
     * @return int
     */
    public function getCorrespondanceType()
    {
        return $this->correspondanceType;
    }

    /**
     * @param int $correspondanceType
     * @return \Cheetahmail\Campaigns\Content\CorrespondanceMTOSave
     */
    public function setCorrespondanceType($correspondanceType)
    {
        $this->correspondanceType = $correspondanceType;
        return $this;
    }

    /**
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param int $state
     * @return \Cheetahmail\Campaigns\Content\CorrespondanceMTOSave
     */
    public function setState($state)
    {
        $this->state = $state;
        return $this;
    }
}
