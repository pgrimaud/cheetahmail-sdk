<?php
namespace Cheetahmail\Campaigns\ImageHosting;

class Delete
{

    /**
     * @var string $imgName
     */
    protected $imgName = null;

    /**
     * @param string $imgName
     */
    public function __construct($imgName)
    {
        $this->imgName = $imgName;
    }

    /**
     * @return string
     */
    public function getImgName()
    {
        return $this->imgName;
    }

    /**
     * @param string $imgName
     * @return \Cheetahmail\Campaigns\ImageHosting\Delete
     */
    public function setImgName($imgName)
    {
        $this->imgName = $imgName;
        return $this;
    }
}
