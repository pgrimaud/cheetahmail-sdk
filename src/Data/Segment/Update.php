<?php
namespace Cheetahmail\Data\Segment;

class Update
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
     * @var int $idQuery
     */
    protected $idQuery = null;

    /**
     * @param string $name
     * @param string $fileName
     * @param boolean $insertSubs
     * @param int $idQuery
     */
    public function __construct($name, $fileName, $insertSubs, $idQuery)
    {
        $this->name = $name;
        $this->fileName = $fileName;
        $this->insertSubs = $insertSubs;
        $this->idQuery = $idQuery;
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
     * @return \Cheetahmail\Data\Segment\Update
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
     * @return \Cheetahmail\Data\Segment\Update
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
     * @return \Cheetahmail\Data\Segment\Update
     */
    public function setInsertSubs($insertSubs)
    {
        $this->insertSubs = $insertSubs;
        return $this;
    }

    /**
     * @return int
     */
    public function getIdQuery()
    {
        return $this->idQuery;
    }

    /**
     * @param int $idQuery
     * @return \Cheetahmail\Data\Segment\Update
     */
    public function setIdQuery($idQuery)
    {
        $this->idQuery = $idQuery;
        return $this;
    }
}
