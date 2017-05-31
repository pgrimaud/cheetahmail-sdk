<?php
namespace Cheetahmail\Campaigns\Content;

class CorrespondanceMTODelete
{

    /**
     * @var int $id
     */
    protected $id = null;

    /**
     * @param int $id
     */
    public function __construct($id)
    {
        $this->id = $id;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return \Cheetahmail\Campaigns\Content\CorrespondanceMTODelete
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }
}
