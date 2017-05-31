<?php
namespace Cheetahmail\Campaigns\Content;

class EMSContainerUpdate
{

    /**
     * @var int $id
     */
    protected $id = null;

    /**
     * @var string $description
     */
    protected $description = null;

    /**
     * @var string $defaultContentKey
     */
    protected $defaultContentKey = null;

    /**
     * @var int $state
     */
    protected $state = null;

    /**
     * @var int $correspondanceType
     */
    protected $correspondanceType = null;

    /**
     * @var int $historyUseState
     */
    protected $historyUseState = null;

    /**
     * @param int $id
     * @param string $description
     * @param string $defaultContentKey
     * @param int $state
     * @param int $correspondanceType
     * @param int $historyUseState
     */
    public function __construct($id, $description, $defaultContentKey, $state, $correspondanceType, $historyUseState)
    {
        $this->id = $id;
        $this->description = $description;
        $this->defaultContentKey = $defaultContentKey;
        $this->state = $state;
        $this->correspondanceType = $correspondanceType;
        $this->historyUseState = $historyUseState;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return \Cheetahmail\Campaigns\Content\EMSContainerUpdate
     */
    public function setId($id)
    {
        $this->id = $id;
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
     * @return \Cheetahmail\Campaigns\Content\EMSContainerUpdate
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return string
     */
    public function getDefaultContentKey()
    {
        return $this->defaultContentKey;
    }

    /**
     * @param string $defaultContentKey
     * @return \Cheetahmail\Campaigns\Content\EMSContainerUpdate
     */
    public function setDefaultContentKey($defaultContentKey)
    {
        $this->defaultContentKey = $defaultContentKey;
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
     * @return \Cheetahmail\Campaigns\Content\EMSContainerUpdate
     */
    public function setState($state)
    {
        $this->state = $state;
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
     * @return \Cheetahmail\Campaigns\Content\EMSContainerUpdate
     */
    public function setCorrespondanceType($correspondanceType)
    {
        $this->correspondanceType = $correspondanceType;
        return $this;
    }

    /**
     * @return int
     */
    public function getHistoryUseState()
    {
        return $this->historyUseState;
    }

    /**
     * @param int $historyUseState
     * @return \Cheetahmail\Campaigns\Content\EMSContainerUpdate
     */
    public function setHistoryUseState($historyUseState)
    {
        $this->historyUseState = $historyUseState;
        return $this;
    }
}
