<?php
namespace Cheetahmail\Campaigns\Content;

class TrackLinkAndSave
{

    /**
     * @var string $contentKey
     */
    protected $contentKey = null;

    /**
     * @var boolean $onlyNewTrack
     */
    protected $onlyNewTrack = null;

    /**
     * @var int $containerID
     */
    protected $containerID = null;

    /**
     * @param string $contentKey
     * @param boolean $onlyNewTrack
     * @param int $containerID
     */
    public function __construct($contentKey, $onlyNewTrack, $containerID)
    {
        $this->contentKey = $contentKey;
        $this->onlyNewTrack = $onlyNewTrack;
        $this->containerID = $containerID;
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
     * @return \Cheetahmail\Campaigns\Content\TrackLinkAndSave
     */
    public function setContentKey($contentKey)
    {
        $this->contentKey = $contentKey;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getOnlyNewTrack()
    {
        return $this->onlyNewTrack;
    }

    /**
     * @param boolean $onlyNewTrack
     * @return \Cheetahmail\Campaigns\Content\TrackLinkAndSave
     */
    public function setOnlyNewTrack($onlyNewTrack)
    {
        $this->onlyNewTrack = $onlyNewTrack;
        return $this;
    }

    /**
     * @return int
     */
    public function getContainerID()
    {
        return $this->containerID;
    }

    /**
     * @param int $containerID
     * @return \Cheetahmail\Campaigns\Content\TrackLinkAndSave
     */
    public function setContainerID($containerID)
    {
        $this->containerID = $containerID;
        return $this;
    }
}
