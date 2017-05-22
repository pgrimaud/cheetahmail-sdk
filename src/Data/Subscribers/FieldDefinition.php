<?php
namespace Cheetahmail\Data\Subscribers;

class FieldDefinition
{

    /**
     * @var int $Id
     */
    protected $Id = null;

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var EType $Type
     */
    protected $Type = null;

    /**
     * @var string $Detail
     */
    protected $Detail = null;

    /**
     * @param int $Id
     * @param EType $Type
     */
    public function __construct($Id, $Type)
    {
        $this->Id = $Id;
        $this->Type = $Type;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * @param int $Id
     * @return \Cheetahmail\Data\Subscribers\FieldDefinition
     */
    public function setId($Id)
    {
        $this->Id = $Id;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->Description;
    }

    /**
     * @param string $Description
     * @return \Cheetahmail\Data\Subscribers\FieldDefinition
     */
    public function setDescription($Description)
    {
        $this->Description = $Description;
        return $this;
    }

    /**
     * @return EType
     */
    public function getType()
    {
        return $this->Type;
    }

    /**
     * @param EType $Type
     * @return \Cheetahmail\Data\Subscribers\FieldDefinition
     */
    public function setType($Type)
    {
        $this->Type = $Type;
        return $this;
    }

    /**
     * @return string
     */
    public function getDetail()
    {
        return $this->Detail;
    }

    /**
     * @param string $Detail
     * @return \Cheetahmail\Data\Subscribers\FieldDefinition
     */
    public function setDetail($Detail)
    {
        $this->Detail = $Detail;
        return $this;
    }
}
