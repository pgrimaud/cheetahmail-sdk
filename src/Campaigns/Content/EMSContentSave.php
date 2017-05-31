<?php
namespace Cheetahmail\Campaigns\Content;

class EMSContentSave
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
     * @var string $description
     */
    protected $description = null;

    /**
     * @var int $state
     */
    protected $state = null;

    /**
     * @var string $message
     */
    protected $message = null;

    /**
     * @param int $containerId
     * @param string $contentKey
     * @param string $description
     * @param int $state
     * @param string $message
     */
    public function __construct($containerId, $contentKey, $description, $state, $message)
    {
        $this->containerId = $containerId;
        $this->contentKey = $contentKey;
        $this->description = $description;
        $this->state = $state;
        $this->message = $message;
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
     * @return \Cheetahmail\Campaigns\Content\EMSContentSave
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
     * @return \Cheetahmail\Campaigns\Content\EMSContentSave
     */
    public function setContentKey($contentKey)
    {
        $this->contentKey = $contentKey;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return \Cheetahmail\Campaigns\Content\EMSContentSave
     */
    public function setDescription($description)
    {
        $this->description = $description;
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
     * @return \Cheetahmail\Campaigns\Content\EMSContentSave
     */
    public function setState($state)
    {
        $this->state = $state;
        return $this;
    }

    /**
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @param string $message
     * @return \Cheetahmail\Campaigns\Content\EMSContentSave
     */
    public function setMessage($message)
    {
        $this->message = $message;
        return $this;
    }
}
