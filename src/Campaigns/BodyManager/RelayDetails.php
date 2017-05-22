<?php
namespace Cheetahmail\Campaigns\BodyManager;

class RelayDetails
{

    /**
     * @var int $idMlist
     */
    protected $idMlist = null;

    /**
     * @var int $id
     */
    protected $id = null;

    /**
     * @var int $idtis
     */
    protected $idtis = null;

    /**
     * @var string $link
     */
    protected $link = null;

    /**
     * @var string $description
     */
    protected $description = null;

    /**
     * @var boolean $add
     */
    protected $add = null;

    /**
     * @var int $idFirstCata
     */
    protected $idFirstCata = null;

    /**
     * @var int $idSecondCata
     */
    protected $idSecondCata = null;

    /**
     * @param int $idMlist
     * @param int $id
     * @param int $idtis
     * @param boolean $add
     * @param int $idFirstCata
     * @param int $idSecondCata
     */
    public function __construct($idMlist, $id, $idtis, $add, $idFirstCata, $idSecondCata)
    {
        $this->idMlist = $idMlist;
        $this->id = $id;
        $this->idtis = $idtis;
        $this->add = $add;
        $this->idFirstCata = $idFirstCata;
        $this->idSecondCata = $idSecondCata;
    }

    /**
     * @return int
     */
    public function getIdMlist()
    {
        return $this->idMlist;
    }

    /**
     * @param int $idMlist
     * @return \Cheetahmail\Campaigns\BodyManager\RelayDetails
     */
    public function setIdMlist($idMlist)
    {
        $this->idMlist = $idMlist;
        return $this;
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
     * @return \Cheetahmail\Campaigns\BodyManager\RelayDetails
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return int
     */
    public function getIdtis()
    {
        return $this->idtis;
    }

    /**
     * @param int $idtis
     * @return \Cheetahmail\Campaigns\BodyManager\RelayDetails
     */
    public function setIdtis($idtis)
    {
        $this->idtis = $idtis;
        return $this;
    }

    /**
     * @return string
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * @param string $link
     * @return \Cheetahmail\Campaigns\BodyManager\RelayDetails
     */
    public function setLink($link)
    {
        $this->link = $link;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return \Cheetahmail\Campaigns\BodyManager\RelayDetails
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getAdd()
    {
        return $this->add;
    }

    /**
     * @param boolean $add
     * @return \Cheetahmail\Campaigns\BodyManager\RelayDetails
     */
    public function setAdd($add)
    {
        $this->add = $add;
        return $this;
    }

    /**
     * @return int
     */
    public function getIdFirstCata()
    {
        return $this->idFirstCata;
    }

    /**
     * @param int $idFirstCata
     * @return \Cheetahmail\Campaigns\BodyManager\RelayDetails
     */
    public function setIdFirstCata($idFirstCata)
    {
        $this->idFirstCata = $idFirstCata;
        return $this;
    }

    /**
     * @return int
     */
    public function getIdSecondCata()
    {
        return $this->idSecondCata;
    }

    /**
     * @param int $idSecondCata
     * @return \Cheetahmail\Campaigns\BodyManager\RelayDetails
     */
    public function setIdSecondCata($idSecondCata)
    {
        $this->idSecondCata = $idSecondCata;
        return $this;
    }
}
