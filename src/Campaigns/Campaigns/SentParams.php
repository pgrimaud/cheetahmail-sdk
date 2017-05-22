<?php
namespace Cheetahmail\Campaigns\Campaigns;

class SentParams
{

    /**
     * @var SpeedValue $speed
     */
    protected $speed = null;

    /**
     * @var int $configId
     */
    protected $configId = null;

    /**
     * @var \DateTime $wishdate
     */
    protected $wishdate = null;

    /**
     * @var int $percentil
     */
    protected $percentil = null;

    /**
     * @var boolean $randomize
     */
    protected $randomize = null;

    /**
     * @var boolean $mailboxMonitor
     */
    protected $mailboxMonitor = null;

    /**
     * @var boolean $emailAnalytics
     */
    protected $emailAnalytics = null;

    /**
     * @param SpeedValue $speed
     * @param int $configId
     * @param \DateTime $wishdate
     */
    public function __construct($speed, $configId, \DateTime $wishdate)
    {
        $this->speed = $speed;
        $this->configId = $configId;
        $this->wishdate = $wishdate->format(\DateTime::ATOM);
    }

    /**
     * @return SpeedValue
     */
    public function getSpeed()
    {
        return $this->speed;
    }

    /**
     * @param SpeedValue $speed
     * @return \Cheetahmail\Campaigns\Campaigns\SentParams
     */
    public function setSpeed($speed)
    {
        $this->speed = $speed;
        return $this;
    }

    /**
     * @return int
     */
    public function getConfigId()
    {
        return $this->configId;
    }

    /**
     * @param int $configId
     * @return \Cheetahmail\Campaigns\Campaigns\SentParams
     */
    public function setConfigId($configId)
    {
        $this->configId = $configId;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getWishdate()
    {
        if ($this->wishdate == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->wishdate);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $wishdate
     * @return \Cheetahmail\Campaigns\Campaigns\SentParams
     */
    public function setWishdate(\DateTime $wishdate)
    {
        $this->wishdate = $wishdate->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return int
     */
    public function getPercentil()
    {
        return $this->percentil;
    }

    /**
     * @param int $percentil
     * @return \Cheetahmail\Campaigns\Campaigns\SentParams
     */
    public function setPercentil($percentil)
    {
        $this->percentil = $percentil;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getRandomize()
    {
        return $this->randomize;
    }

    /**
     * @param boolean $randomize
     * @return \Cheetahmail\Campaigns\Campaigns\SentParams
     */
    public function setRandomize($randomize)
    {
        $this->randomize = $randomize;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getMailboxMonitor()
    {
        return $this->mailboxMonitor;
    }

    /**
     * @param boolean $mailboxMonitor
     * @return \Cheetahmail\Campaigns\Campaigns\SentParams
     */
    public function setMailboxMonitor($mailboxMonitor)
    {
        $this->mailboxMonitor = $mailboxMonitor;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getEmailAnalytics()
    {
        return $this->emailAnalytics;
    }

    /**
     * @param boolean $emailAnalytics
     * @return \Cheetahmail\Campaigns\Campaigns\SentParams
     */
    public function setEmailAnalytics($emailAnalytics)
    {
        $this->emailAnalytics = $emailAnalytics;
        return $this;
    }
}
