<?php
namespace Cheetahmail\Campaigns\Sms;

class SendSmsCampaignParams
{

    /**
     * @var int $IdSmsCamp
     */
    protected $IdSmsCamp = null;

    /**
     * @var \DateTime $Date
     */
    protected $Date = null;

    /**
     * @var \DateTime $Hour
     */
    protected $Hour = null;

    /**
     * @var boolean $IsCyclic
     */
    protected $IsCyclic = null;

    /**
     * @param int $IdSmsCamp
     * @param boolean $IsCyclic
     */
    public function __construct($IdSmsCamp, $IsCyclic)
    {
        $this->IdSmsCamp = $IdSmsCamp;
        $this->IsCyclic = $IsCyclic;
    }

    /**
     * @return int
     */
    public function getIdSmsCamp()
    {
        return $this->IdSmsCamp;
    }

    /**
     * @param int $IdSmsCamp
     * @return \Cheetahmail\Campaigns\Sms\SendSmsCampaignParams
     */
    public function setIdSmsCamp($IdSmsCamp)
    {
        $this->IdSmsCamp = $IdSmsCamp;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDate()
    {
        if ($this->Date == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->Date);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $Date
     * @return \Cheetahmail\Campaigns\Sms\SendSmsCampaignParams
     */
    public function setDate(\DateTime $Date = null)
    {
        if ($Date == null) {
            $this->Date = null;
        } else {
            $this->Date = $Date->format(\DateTime::ATOM);
        }
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getHour()
    {
        if ($this->Hour == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->Hour);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $Hour
     * @return \Cheetahmail\Campaigns\Sms\SendSmsCampaignParams
     */
    public function setHour(\DateTime $Hour = null)
    {
        if ($Hour == null) {
            $this->Hour = null;
        } else {
            $this->Hour = $Hour->format(\DateTime::ATOM);
        }
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsCyclic()
    {
        return $this->IsCyclic;
    }

    /**
     * @param boolean $IsCyclic
     * @return \Cheetahmail\Campaigns\Sms\SendSmsCampaignParams
     */
    public function setIsCyclic($IsCyclic)
    {
        $this->IsCyclic = $IsCyclic;
        return $this;
    }
}
