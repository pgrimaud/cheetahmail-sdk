<?php
namespace Cheetahmail\Campaigns\ImageHosting;

class Rename
{

    /**
     * @var string $OldImgName
     */
    protected $OldImgName = null;

    /**
     * @var string $NewImgName
     */
    protected $NewImgName = null;

    /**
     * @param string $OldImgName
     * @param string $NewImgName
     */
    public function __construct($OldImgName, $NewImgName)
    {
        $this->OldImgName = $OldImgName;
        $this->NewImgName = $NewImgName;
    }

    /**
     * @return string
     */
    public function getOldImgName()
    {
        return $this->OldImgName;
    }

    /**
     * @param string $OldImgName
     * @return \Cheetahmail\Campaigns\ImageHosting\Rename
     */
    public function setOldImgName($OldImgName)
    {
        $this->OldImgName = $OldImgName;
        return $this;
    }

    /**
     * @return string
     */
    public function getNewImgName()
    {
        return $this->NewImgName;
    }

    /**
     * @param string $NewImgName
     * @return \Cheetahmail\Campaigns\ImageHosting\Rename
     */
    public function setNewImgName($NewImgName)
    {
        $this->NewImgName = $NewImgName;
        return $this;
    }
}
