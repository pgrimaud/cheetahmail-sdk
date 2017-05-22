<?php
namespace Cheetahmail\Campaigns\ChronoContact;

class DeleteChronoResponse
{

    /**
     * @var boolean $DeleteChronoResult
     */
    protected $DeleteChronoResult = null;

    /**
     * @param boolean $DeleteChronoResult
     */
    public function __construct($DeleteChronoResult)
    {
        $this->DeleteChronoResult = $DeleteChronoResult;
    }

    /**
     * @return boolean
     */
    public function getDeleteChronoResult()
    {
        return $this->DeleteChronoResult;
    }

    /**
     * @param boolean $DeleteChronoResult
     * @return \Cheetahmail\Campaigns\ChronoContact\DeleteChronoResponse
     */
    public function setDeleteChronoResult($DeleteChronoResult)
    {
        $this->DeleteChronoResult = $DeleteChronoResult;
        return $this;
    }
}
