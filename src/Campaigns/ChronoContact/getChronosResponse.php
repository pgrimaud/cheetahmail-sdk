<?php
namespace Cheetahmail\Campaigns\ChronoContact;

class getChronosResponse
{

    /**
     * @var ArrayOfArrayOfString $getChronosResult
     */
    protected $getChronosResult = null;

    /**
     * @param ArrayOfArrayOfString $getChronosResult
     */
    public function __construct($getChronosResult)
    {
        $this->getChronosResult = $getChronosResult;
    }

    /**
     * @return ArrayOfArrayOfString
     */
    public function getGetChronosResult()
    {
        return $this->getChronosResult;
    }

    /**
     * @param ArrayOfArrayOfString $getChronosResult
     * @return \Cheetahmail\Campaigns\ChronoContact\getChronosResponse
     */
    public function setGetChronosResult($getChronosResult)
    {
        $this->getChronosResult = $getChronosResult;
        return $this;
    }
}
