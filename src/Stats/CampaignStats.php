<?php
namespace Cheetahmail\Stats;

class CampaignStats
{

    /**
     * @var int $Id
     */
    protected $Id = null;

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var int $Target
     */
    protected $Target = null;

    /**
     * @var \DateTime $SendDate
     */
    protected $SendDate = null;

    /**
     * @var int $Envelope
     */
    protected $Envelope = null;

    /**
     * @var int $Recipients
     */
    protected $Recipients = null;

    /**
     * @var int $Filtered
     */
    protected $Filtered = null;

    /**
     * @var int $Bounces
     */
    protected $Bounces = null;

    /**
     * @var int $Delivered
     */
    protected $Delivered = null;

    /**
     * @var int $Openers
     */
    protected $Openers = null;

    /**
     * @var int $Openings
     */
    protected $Openings = null;

    /**
     * @var int $Clickers
     */
    protected $Clickers = null;

    /**
     * @var int $Clicks
     */
    protected $Clicks = null;

    /**
     * @var int $Complaints
     */
    protected $Complaints = null;

    /**
     * @var int $Unsubs
     */
    protected $Unsubs = null;

    /**
     * @var int $HardBounces
     */
    protected $HardBounces = null;

    /**
     * @var int $SoftBounces
     */
    protected $SoftBounces = null;

    /**
     * @param int $Id
     * @param int $Target
     * @param \DateTime $SendDate
     * @param int $Envelope
     * @param int $Recipients
     * @param int $Filtered
     * @param int $Bounces
     * @param int $Delivered
     * @param int $Openers
     * @param int $Openings
     * @param int $Clickers
     * @param int $Clicks
     * @param int $Complaints
     * @param int $Unsubs
     * @param int $HardBounces
     * @param int $SoftBounces
     */
    public function __construct($Id, $Target, \DateTime $SendDate, $Envelope, $Recipients, $Filtered, $Bounces, $Delivered, $Openers, $Openings, $Clickers, $Clicks, $Complaints, $Unsubs, $HardBounces, $SoftBounces)
    {
        $this->Id = $Id;
        $this->Target = $Target;
        $this->SendDate = $SendDate->format(\DateTime::ATOM);
        $this->Envelope = $Envelope;
        $this->Recipients = $Recipients;
        $this->Filtered = $Filtered;
        $this->Bounces = $Bounces;
        $this->Delivered = $Delivered;
        $this->Openers = $Openers;
        $this->Openings = $Openings;
        $this->Clickers = $Clickers;
        $this->Clicks = $Clicks;
        $this->Complaints = $Complaints;
        $this->Unsubs = $Unsubs;
        $this->HardBounces = $HardBounces;
        $this->SoftBounces = $SoftBounces;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * @param int $Id
     * @return \Cheetahmail\Stats\CampaignStats
     */
    public function setId($Id)
    {
        $this->Id = $Id;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->Description;
    }

    /**
     * @param string $Description
     * @return \Cheetahmail\Stats\CampaignStats
     */
    public function setDescription($Description)
    {
        $this->Description = $Description;
        return $this;
    }

    /**
     * @return int
     */
    public function getTarget()
    {
        return $this->Target;
    }

    /**
     * @param int $Target
     * @return \Cheetahmail\Stats\CampaignStats
     */
    public function setTarget($Target)
    {
        $this->Target = $Target;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getSendDate()
    {
        if ($this->SendDate == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->SendDate);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $SendDate
     * @return \Cheetahmail\Stats\CampaignStats
     */
    public function setSendDate(\DateTime $SendDate)
    {
        $this->SendDate = $SendDate->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return int
     */
    public function getEnvelope()
    {
        return $this->Envelope;
    }

    /**
     * @param int $Envelope
     * @return \Cheetahmail\Stats\CampaignStats
     */
    public function setEnvelope($Envelope)
    {
        $this->Envelope = $Envelope;
        return $this;
    }

    /**
     * @return int
     */
    public function getRecipients()
    {
        return $this->Recipients;
    }

    /**
     * @param int $Recipients
     * @return \Cheetahmail\Stats\CampaignStats
     */
    public function setRecipients($Recipients)
    {
        $this->Recipients = $Recipients;
        return $this;
    }

    /**
     * @return int
     */
    public function getFiltered()
    {
        return $this->Filtered;
    }

    /**
     * @param int $Filtered
     * @return \Cheetahmail\Stats\CampaignStats
     */
    public function setFiltered($Filtered)
    {
        $this->Filtered = $Filtered;
        return $this;
    }

    /**
     * @return int
     */
    public function getBounces()
    {
        return $this->Bounces;
    }

    /**
     * @param int $Bounces
     * @return \Cheetahmail\Stats\CampaignStats
     */
    public function setBounces($Bounces)
    {
        $this->Bounces = $Bounces;
        return $this;
    }

    /**
     * @return int
     */
    public function getDelivered()
    {
        return $this->Delivered;
    }

    /**
     * @param int $Delivered
     * @return \Cheetahmail\Stats\CampaignStats
     */
    public function setDelivered($Delivered)
    {
        $this->Delivered = $Delivered;
        return $this;
    }

    /**
     * @return int
     */
    public function getOpeners()
    {
        return $this->Openers;
    }

    /**
     * @param int $Openers
     * @return \Cheetahmail\Stats\CampaignStats
     */
    public function setOpeners($Openers)
    {
        $this->Openers = $Openers;
        return $this;
    }

    /**
     * @return int
     */
    public function getOpenings()
    {
        return $this->Openings;
    }

    /**
     * @param int $Openings
     * @return \Cheetahmail\Stats\CampaignStats
     */
    public function setOpenings($Openings)
    {
        $this->Openings = $Openings;
        return $this;
    }

    /**
     * @return int
     */
    public function getClickers()
    {
        return $this->Clickers;
    }

    /**
     * @param int $Clickers
     * @return \Cheetahmail\Stats\CampaignStats
     */
    public function setClickers($Clickers)
    {
        $this->Clickers = $Clickers;
        return $this;
    }

    /**
     * @return int
     */
    public function getClicks()
    {
        return $this->Clicks;
    }

    /**
     * @param int $Clicks
     * @return \Cheetahmail\Stats\CampaignStats
     */
    public function setClicks($Clicks)
    {
        $this->Clicks = $Clicks;
        return $this;
    }

    /**
     * @return int
     */
    public function getComplaints()
    {
        return $this->Complaints;
    }

    /**
     * @param int $Complaints
     * @return \Cheetahmail\Stats\CampaignStats
     */
    public function setComplaints($Complaints)
    {
        $this->Complaints = $Complaints;
        return $this;
    }

    /**
     * @return int
     */
    public function getUnsubs()
    {
        return $this->Unsubs;
    }

    /**
     * @param int $Unsubs
     * @return \Cheetahmail\Stats\CampaignStats
     */
    public function setUnsubs($Unsubs)
    {
        $this->Unsubs = $Unsubs;
        return $this;
    }

    /**
     * @return int
     */
    public function getHardBounces()
    {
        return $this->HardBounces;
    }

    /**
     * @param int $HardBounces
     * @return \Cheetahmail\Stats\CampaignStats
     */
    public function setHardBounces($HardBounces)
    {
        $this->HardBounces = $HardBounces;
        return $this;
    }

    /**
     * @return int
     */
    public function getSoftBounces()
    {
        return $this->SoftBounces;
    }

    /**
     * @param int $SoftBounces
     * @return \Cheetahmail\Stats\CampaignStats
     */
    public function setSoftBounces($SoftBounces)
    {
        $this->SoftBounces = $SoftBounces;
        return $this;
    }
}
