<?php
namespace Cheetahmail\Data\Ssis;

class DeletePackageResponse
{

    /**
     * @var boolean $DeletePackageResult
     */
    protected $DeletePackageResult = null;

    /**
     * @param boolean $DeletePackageResult
     */
    public function __construct($DeletePackageResult)
    {
        $this->DeletePackageResult = $DeletePackageResult;
    }

    /**
     * @return boolean
     */
    public function getDeletePackageResult()
    {
        return $this->DeletePackageResult;
    }

    /**
     * @param boolean $DeletePackageResult
     * @return \Cheetahmail\Data\Ssis\DeletePackageResponse
     */
    public function setDeletePackageResult($DeletePackageResult)
    {
        $this->DeletePackageResult = $DeletePackageResult;
        return $this;
    }
}
