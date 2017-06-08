<?php
namespace Cheetahmail\Data\Ssis;

class SetFields
{

    /**
     * @var int $idmapp
     */
    protected $idmapp = null;

    /**
     * @var ArrayOfLinkedfied $correspondences_Fields
     */
    protected $correspondences_Fields = null;

    /**
     * @param int $idmapp
     * @param ArrayOfLinkedfied $correspondences_Fields
     */
    public function __construct($idmapp, $correspondences_Fields)
    {
        $this->idmapp = $idmapp;
        $this->correspondences_Fields = $correspondences_Fields;
    }

    /**
     * @return int
     */
    public function getIdmapp()
    {
        return $this->idmapp;
    }

    /**
     * @param int $idmapp
     * @return \Cheetahmail\Data\Ssis\SetFields
     */
    public function setIdmapp($idmapp)
    {
        $this->idmapp = $idmapp;
        return $this;
    }

    /**
     * @return ArrayOfLinkedfied
     */
    public function getCorrespondences_Fields()
    {
        return $this->correspondences_Fields;
    }

    /**
     * @param ArrayOfLinkedfied $correspondences_Fields
     * @return \Cheetahmail\Data\Ssis\SetFields
     */
    public function setCorrespondences_Fields($correspondences_Fields)
    {
        $this->correspondences_Fields = $correspondences_Fields;
        return $this;
    }
}
