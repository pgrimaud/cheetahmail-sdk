<?php
namespace Cheetahmail\Campaigns;

class ListBetweenTwoDates
{

    /**
     * @var \DateTime $pDateDebut
     */
    protected $pDateDebut = null;

    /**
     * @var \DateTime $pDateFin
     */
    protected $pDateFin = null;

    /**
     * @var boolean $withBAT
     */
    protected $withBAT = null;

    /**
     * @param \DateTime $pDateDebut
     * @param \DateTime $pDateFin
     * @param boolean $withBAT
     */
    public function __construct(\DateTime $pDateDebut, \DateTime $pDateFin, $withBAT)
    {
      $this->pDateDebut = $pDateDebut->format(\DateTime::ATOM);
      $this->pDateFin = $pDateFin->format(\DateTime::ATOM);
      $this->withBAT = $withBAT;
    }

    /**
     * @return \DateTime
     */
    public function getPDateDebut()
    {
      if ($this->pDateDebut == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->pDateDebut);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $pDateDebut
     * @return \Cheetahmail\Campaigns\ListBetweenTwoDates
     */
    public function setPDateDebut(\DateTime $pDateDebut)
    {
      $this->pDateDebut = $pDateDebut->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getPDateFin()
    {
      if ($this->pDateFin == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->pDateFin);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $pDateFin
     * @return \Cheetahmail\Campaigns\ListBetweenTwoDates
     */
    public function setPDateFin(\DateTime $pDateFin)
    {
      $this->pDateFin = $pDateFin->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return boolean
     */
    public function getWithBAT()
    {
      return $this->withBAT;
    }

    /**
     * @param boolean $withBAT
     * @return \Cheetahmail\Campaigns\ListBetweenTwoDates
     */
    public function setWithBAT($withBAT)
    {
      $this->withBAT = $withBAT;
      return $this;
    }

}
