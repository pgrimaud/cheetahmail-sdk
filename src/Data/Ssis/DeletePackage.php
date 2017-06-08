<?php
namespace Cheetahmail\Data\Ssis;

class DeletePackage
{

    /**
     * @var int $idMapping
     */
    protected $idMapping = null;

    /**
     * @param int $idMapping
     */
    public function __construct($idMapping)
    {
        $this->idMapping = $idMapping;
    }

    /**
     * @return int
     */
    public function getIdMapping()
    {
        return $this->idMapping;
    }

    /**
     * @param int $idMapping
     * @return \Cheetahmail\Data\Ssis\DeletePackage
     */
    public function setIdMapping($idMapping)
    {
        $this->idMapping = $idMapping;
        return $this;
    }
}
