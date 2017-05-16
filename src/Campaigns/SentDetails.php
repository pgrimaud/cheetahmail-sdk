<?php
namespace Cheetahmail\Campaigns;

class SentDetails
{

    /**
     * @var string $description
     */
    protected $description = null;

    /**
     * @var int $id
     */
    protected $id = null;

    /**
     * @var SENTSTATUS $state
     */
    protected $state = null;

    /**
     * @var \DateTime $wishdate
     */
    protected $wishdate = null;

    /**
     * @var float $percentil
     */
    protected $percentil = null;

    /**
     * @var int $idConfig
     */
    protected $idConfig = null;

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
     * @param int $id
     * @param SENTSTATUS $state
     * @param \DateTime $wishdate
     * @param float $percentil
     * @param int $idConfig
     */
    public function __construct($id, $state, \DateTime $wishdate, $percentil, $idConfig)
    {
        $this->id = $id;
        $this->state = $state;
        $this->wishdate = $wishdate->format(\DateTime::ATOM);
        $this->percentil = $percentil;
        $this->idConfig = $idConfig;
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
     * @return \Cheetahmail\Campaigns\SentDetails
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
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
     * @return \Cheetahmail\Campaigns\SentDetails
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return SENTSTATUS
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param SENTSTATUS $state
     * @return \Cheetahmail\Campaigns\SentDetails
     */
    public function setState($state)
    {
        $this->state = $state;
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
     * @return \Cheetahmail\Campaigns\SentDetails
     */
    public function setWishdate(\DateTime $wishdate)
    {
        $this->wishdate = $wishdate->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return float
     */
    public function getPercentil()
    {
        return $this->percentil;
    }

    /**
     * @param float $percentil
     * @return \Cheetahmail\Campaigns\SentDetails
     */
    public function setPercentil($percentil)
    {
        $this->percentil = $percentil;
        return $this;
    }

    /**
     * @return int
     */
    public function getIdConfig()
    {
        return $this->idConfig;
    }

    /**
     * @param int $idConfig
     * @return \Cheetahmail\Campaigns\SentDetails
     */
    public function setIdConfig($idConfig)
    {
        $this->idConfig = $idConfig;
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
     * @return \Cheetahmail\Campaigns\SentDetails
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
     * @return \Cheetahmail\Campaigns\SentDetails
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
     * @return \Cheetahmail\Campaigns\SentDetails
     */
    public function setEmailAnalytics($emailAnalytics)
    {
        $this->emailAnalytics = $emailAnalytics;
        return $this;
    }
}
