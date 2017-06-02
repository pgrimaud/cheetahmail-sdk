<?php
namespace Cheetahmail\Campaigns\Sms;

class Campaign
{

    /**
     * @var int $CampaignID
     */
    protected $CampaignID = null;

    /**
     * @var string $CampaignName
     */
    protected $CampaignName = null;

    /**
     * @var int $StateID
     */
    protected $StateID = null;

    /**
     * @var string $State
     */
    protected $State = null;

    /**
     * @param int $CampaignID
     * @param int $StateID
     */
    public function __construct($CampaignID, $StateID)
    {
        $this->CampaignID = $CampaignID;
        $this->StateID = $StateID;
    }

    /**
     * @return int
     */
    public function getCampaignID()
    {
        return $this->CampaignID;
    }

    /**
     * @param int $CampaignID
     * @return \Cheetahmail\Campaigns\Sms\Campaign
     */
    public function setCampaignID($CampaignID)
    {
        $this->CampaignID = $CampaignID;
        return $this;
    }

    /**
     * @return string
     */
    public function getCampaignName()
    {
        return $this->CampaignName;
    }

    /**
     * @param string $CampaignName
     * @return \Cheetahmail\Campaigns\Sms\Campaign
     */
    public function setCampaignName($CampaignName)
    {
        $this->CampaignName = $CampaignName;
        return $this;
    }

    /**
     * @return int
     */
    public function getStateID()
    {
        return $this->StateID;
    }

    /**
     * @param int $StateID
     * @return \Cheetahmail\Campaigns\Sms\Campaign
     */
    public function setStateID($StateID)
    {
        $this->StateID = $StateID;
        return $this;
    }

    /**
     * @return string
     */
    public function getState()
    {
        return $this->State;
    }

    /**
     * @param string $State
     * @return \Cheetahmail\Campaigns\Sms\Campaign
     */
    public function setState($State)
    {
        $this->State = $State;
        return $this;
    }
}
