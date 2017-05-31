<?php
namespace Cheetahmail\Campaigns\Content;

class CorrespondanceOTMUpdate
{

    /**
     * @var string $contentKeySource
     */
    protected $contentKeySource = null;

    /**
     * @var string $contentKeyCorrespondanceSource
     */
    protected $contentKeyCorrespondanceSource = null;

    /**
     * @var int $containerId
     */
    protected $containerId = null;

    /**
     * @var string $contentKeyDestination
     */
    protected $contentKeyDestination = null;

    /**
     * @var string $contentKeyCorrespondanceDestination
     */
    protected $contentKeyCorrespondanceDestination = null;

    /**
     * @var int $correspondanceType
     */
    protected $correspondanceType = null;

    /**
     * @var int $state
     */
    protected $state = null;

    /**
     * @param string $contentKeySource
     * @param string $contentKeyCorrespondanceSource
     * @param int $containerId
     * @param string $contentKeyDestination
     * @param string $contentKeyCorrespondanceDestination
     * @param int $correspondanceType
     * @param int $state
     */
    public function __construct($contentKeySource, $contentKeyCorrespondanceSource, $containerId, $contentKeyDestination, $contentKeyCorrespondanceDestination, $correspondanceType, $state)
    {
        $this->contentKeySource = $contentKeySource;
        $this->contentKeyCorrespondanceSource = $contentKeyCorrespondanceSource;
        $this->containerId = $containerId;
        $this->contentKeyDestination = $contentKeyDestination;
        $this->contentKeyCorrespondanceDestination = $contentKeyCorrespondanceDestination;
        $this->correspondanceType = $correspondanceType;
        $this->state = $state;
    }

    /**
     * @return string
     */
    public function getContentKeySource()
    {
        return $this->contentKeySource;
    }

    /**
     * @param string $contentKeySource
     * @return \Cheetahmail\Campaigns\Content\CorrespondanceOTMUpdate
     */
    public function setContentKeySource($contentKeySource)
    {
        $this->contentKeySource = $contentKeySource;
        return $this;
    }

    /**
     * @return string
     */
    public function getContentKeyCorrespondanceSource()
    {
        return $this->contentKeyCorrespondanceSource;
    }

    /**
     * @param string $contentKeyCorrespondanceSource
     * @return \Cheetahmail\Campaigns\Content\CorrespondanceOTMUpdate
     */
    public function setContentKeyCorrespondanceSource($contentKeyCorrespondanceSource)
    {
        $this->contentKeyCorrespondanceSource = $contentKeyCorrespondanceSource;
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
     * @return \Cheetahmail\Campaigns\Content\CorrespondanceOTMUpdate
     */
    public function setContainerId($containerId)
    {
        $this->containerId = $containerId;
        return $this;
    }

    /**
     * @return string
     */
    public function getContentKeyDestination()
    {
        return $this->contentKeyDestination;
    }

    /**
     * @param string $contentKeyDestination
     * @return \Cheetahmail\Campaigns\Content\CorrespondanceOTMUpdate
     */
    public function setContentKeyDestination($contentKeyDestination)
    {
        $this->contentKeyDestination = $contentKeyDestination;
        return $this;
    }

    /**
     * @return string
     */
    public function getContentKeyCorrespondanceDestination()
    {
        return $this->contentKeyCorrespondanceDestination;
    }

    /**
     * @param string $contentKeyCorrespondanceDestination
     * @return \Cheetahmail\Campaigns\Content\CorrespondanceOTMUpdate
     */
    public function setContentKeyCorrespondanceDestination($contentKeyCorrespondanceDestination)
    {
        $this->contentKeyCorrespondanceDestination = $contentKeyCorrespondanceDestination;
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
     * @return \Cheetahmail\Campaigns\Content\CorrespondanceOTMUpdate
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
     * @return \Cheetahmail\Campaigns\Content\CorrespondanceOTMUpdate
     */
    public function setState($state)
    {
        $this->state = $state;
        return $this;
    }
}
