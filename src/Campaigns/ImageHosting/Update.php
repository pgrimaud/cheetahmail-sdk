<?php
namespace Cheetahmail\Campaigns\ImageHosting;

class Update
{

    /**
     * @var string $imgName
     */
    protected $imgName = null;

    /**
     * @var string $file
     */
    protected $file = null;

    /**
     * @param string $imgName
     * @param string $file
     */
    public function __construct($imgName, $file)
    {
        $this->imgName = $imgName;
        $this->file = $file;
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
     * @return \Cheetahmail\Campaigns\ImageHosting\Update
     */
    public function setImgName($imgName)
    {
        $this->imgName = $imgName;
        return $this;
    }

    /**
     * @return string
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     * @param string $file
     * @return \Cheetahmail\Campaigns\ImageHosting\Update
     */
    public function setFile($file)
    {
        $this->file = $file;
        return $this;
    }
}
