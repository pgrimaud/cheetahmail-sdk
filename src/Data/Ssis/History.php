<?php
namespace Cheetahmail\Data\Ssis;

class History
{

    /**
     * @var \DateTime $dateBegin
     */
    protected $dateBegin = null;

    /**
     * @var \DateTime $dateEnd
     */
    protected $dateEnd = null;

    /**
     * @param \DateTime $dateBegin
     * @param \DateTime $dateEnd
     */
    public function __construct(\DateTime $dateBegin, \DateTime $dateEnd)
    {
        $this->dateBegin = $dateBegin->format(\DateTime::ATOM);
        $this->dateEnd = $dateEnd->format(\DateTime::ATOM);
    }

    /**
     * @return \DateTime
     */
    public function getDateBegin()
    {
        if ($this->dateBegin == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->dateBegin);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $dateBegin
     * @return \Cheetahmail\Data\Ssis\History
     */
    public function setDateBegin(\DateTime $dateBegin)
    {
        $this->dateBegin = $dateBegin->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDateEnd()
    {
        if ($this->dateEnd == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->dateEnd);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $dateEnd
     * @return \Cheetahmail\Data\Ssis\History
     */
    public function setDateEnd(\DateTime $dateEnd)
    {
        $this->dateEnd = $dateEnd->format(\DateTime::ATOM);
        return $this;
    }
}
