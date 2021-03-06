<?php
namespace Cheetahmail\Campaigns\ChronoContact;

class getChronoResponse
{

    /**
     * @var Chrono $getChronoResult
     */
    protected $getChronoResult = null;

    /**
     * @param Chrono $getChronoResult
     */
    public function __construct($getChronoResult)
    {
        $this->getChronoResult = $getChronoResult;
    }

    /**
     * @return Chrono
     */
    public function getGetChronoResult()
    {
        return $this->getChronoResult;
    }

    /**
     * @param Chrono $getChronoResult
     * @return \Cheetahmail\Campaigns\ChronoContact\getChronoResponse
     */
    public function setGetChronoResult($getChronoResult)
    {
        $this->getChronoResult = $getChronoResult;
        return $this;
    }
}
