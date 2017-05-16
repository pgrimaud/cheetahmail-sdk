<?php
namespace Cheetahmail\Stats;

class SMSCampaignStats
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
     * @var int $Recipients
     */
    protected $Recipients = null;

    /**
     * @var int $Bounces
     */
    protected $Bounces = null;

    /**
     * @var int $Delivered
     */
    protected $Delivered = null;

    /**
     * @var int $SentNumber
     */
    protected $SentNumber = null;

    /**
     * @param int $Id
     * @param int $Target
     * @param \DateTime $SendDate
     * @param int $Recipients
     * @param int $Bounces
     * @param int $Delivered
     * @param int $SentNumber
     */
    public function __construct($Id, $Target, \DateTime $SendDate, $Recipients, $Bounces, $Delivered, $SentNumber)
    {
        $this->Id = $Id;
        $this->Target = $Target;
        $this->SendDate = $SendDate->format(\DateTime::ATOM);
        $this->Recipients = $Recipients;
        $this->Bounces = $Bounces;
        $this->Delivered = $Delivered;
        $this->SentNumber = $SentNumber;
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
     * @return \Cheetahmail\Stats\SMSCampaignStats
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
     * @return \Cheetahmail\Stats\SMSCampaignStats
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
     * @return \Cheetahmail\Stats\SMSCampaignStats
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
     * @return \Cheetahmail\Stats\SMSCampaignStats
     */
    public function setSendDate(\DateTime $SendDate)
    {
        $this->SendDate = $SendDate->format(\DateTime::ATOM);
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
     * @return \Cheetahmail\Stats\SMSCampaignStats
     */
    public function setRecipients($Recipients)
    {
        $this->Recipients = $Recipients;
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
     * @return \Cheetahmail\Stats\SMSCampaignStats
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
     * @return \Cheetahmail\Stats\SMSCampaignStats
     */
    public function setDelivered($Delivered)
    {
        $this->Delivered = $Delivered;
        return $this;
    }

    /**
     * @return int
     */
    public function getSentNumber()
    {
        return $this->SentNumber;
    }

    /**
     * @param int $SentNumber
     * @return \Cheetahmail\Stats\SMSCampaignStats
     */
    public function setSentNumber($SentNumber)
    {
        $this->SentNumber = $SentNumber;
        return $this;
    }
}
