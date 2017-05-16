<?php

namespace Cheetahmail\Stats;

class SMSCampaignOverview
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
     * @var \DateTime $SendDate
     */
    protected $SendDate = null;

    /**
     * @param int $Id
     * @param \DateTime $SendDate
     */
    public function __construct($Id, \DateTime $SendDate)
    {
      $this->Id = $Id;
      $this->SendDate = $SendDate->format(\DateTime::ATOM);
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
     * @return \Cheetahmail\Stats\SMSCampaignOverview
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
     * @return \Cheetahmail\Stats\SMSCampaignOverview
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
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
     * @return \Cheetahmail\Stats\SMSCampaignOverview
     */
    public function setSendDate(\DateTime $SendDate)
    {
      $this->SendDate = $SendDate->format(\DateTime::ATOM);
      return $this;
    }

}
