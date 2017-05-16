<?php

namespace Cheetahmail\ChronoContact;

class ModifyChronoResponse
{

    /**
     * @var boolean $ModifyChronoResult
     */
    protected $ModifyChronoResult = null;

    /**
     * @param boolean $ModifyChronoResult
     */
    public function __construct($ModifyChronoResult)
    {
        $this->ModifyChronoResult = $ModifyChronoResult;
    }

    /**
     * @return boolean
     */
    public function getModifyChronoResult()
    {
        return $this->ModifyChronoResult;
    }

    /**
     * @param boolean $ModifyChronoResult
     * @return \Cheetahmail\ChronoContact\ModifyChronoResponse
     */
    public function setModifyChronoResult($ModifyChronoResult)
    {
        $this->ModifyChronoResult = $ModifyChronoResult;
        return $this;
    }
}
