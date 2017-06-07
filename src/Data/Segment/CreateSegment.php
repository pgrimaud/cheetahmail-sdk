<?php
namespace Cheetahmail\Data\Segment;

class CreateSegment
{

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var string $fileName
     */
    protected $fileName = null;

    /**
     * @var boolean $insertSubs
     */
    protected $insertSubs = null;

    /**
     * @var int $idList
     */
    protected $idList = null;

    /**
     * @param string $name
     * @param string $fileName
     * @param boolean $insertSubs
     * @param int $idList
     */
    public function __construct($name, $fileName, $insertSubs, $idList)
    {
        $this->name = $name;
        $this->fileName = $fileName;
        $this->insertSubs = $insertSubs;
        $this->idList = $idList;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return \Cheetahmail\Data\Segment\CreateSegment
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getFileName()
    {
        return $this->fileName;
    }

    /**
     * @param string $fileName
     * @return \Cheetahmail\Data\Segment\CreateSegment
     */
    public function setFileName($fileName)
    {
        $this->fileName = $fileName;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getInsertSubs()
    {
        return $this->insertSubs;
    }

    /**
     * @param boolean $insertSubs
     * @return \Cheetahmail\Data\Segment\CreateSegment
     */
    public function setInsertSubs($insertSubs)
    {
        $this->insertSubs = $insertSubs;
        return $this;
    }

    /**
     * @return int
     */
    public function getIdList()
    {
        return $this->idList;
    }

    /**
     * @param int $idList
     * @return \Cheetahmail\Data\Segment\CreateSegment
     */
    public function setIdList($idList)
    {
        $this->idList = $idList;
        return $this;
    }
}
