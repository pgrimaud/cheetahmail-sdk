<?php
namespace Cheetahmail\Campaigns\ChronoContact;

class CreateChronoResponse
{

    /**
     * @var int $CreateChronoResult
     */
    protected $CreateChronoResult = null;

    /**
     * @param int $CreateChronoResult
     */
    public function __construct($CreateChronoResult)
    {
        $this->CreateChronoResult = $CreateChronoResult;
    }

    /**
     * @return int
     */
    public function getCreateChronoResult()
    {
        return $this->CreateChronoResult;
    }

    /**
     * @param int $CreateChronoResult
     * @return \Cheetahmail\Campaigns\ChronoContact\CreateChronoResponse
     */
    public function setCreateChronoResult($CreateChronoResult)
    {
        $this->CreateChronoResult = $CreateChronoResult;
        return $this;
    }
}
