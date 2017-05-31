<?php
namespace Cheetahmail\Campaigns\Content;

class EMSContainerSave
{

    /**
     * @var string $description
     */
    protected $description = null;

    /**
     * @var string $defaultContent
     */
    protected $defaultContent = null;

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
     * @param string $description
     * @param string $defaultContent
     * @param int $state
     * @param int $correspondanceType
     * @param int $historyUseState
     */
    public function __construct($description, $defaultContent, $state, $correspondanceType, $historyUseState)
    {
        $this->description = $description;
        $this->defaultContent = $defaultContent;
        $this->state = $state;
        $this->correspondanceType = $correspondanceType;
        $this->historyUseState = $historyUseState;
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
     * @return \Cheetahmail\Campaigns\Content\EMSContainerSave
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return string
     */
    public function getDefaultContent()
    {
        return $this->defaultContent;
    }

    /**
     * @param string $defaultContent
     * @return \Cheetahmail\Campaigns\Content\EMSContainerSave
     */
    public function setDefaultContent($defaultContent)
    {
        $this->defaultContent = $defaultContent;
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
     * @return \Cheetahmail\Campaigns\Content\EMSContainerSave
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
     * @return \Cheetahmail\Campaigns\Content\EMSContainerSave
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
     * @return \Cheetahmail\Campaigns\Content\EMSContainerSave
     */
    public function setHistoryUseState($historyUseState)
    {
        $this->historyUseState = $historyUseState;
        return $this;
    }
}
