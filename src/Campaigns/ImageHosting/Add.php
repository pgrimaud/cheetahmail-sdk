<?php
namespace Cheetahmail\Campaigns\ImageHosting;

class Add
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
     * @var string $destinationFolder
     */
    protected $destinationFolder = null;

    /**
     * @param string $imgName
     * @param string $file
     * @param string $destinationFolder
     */
    public function __construct($imgName, $file, $destinationFolder)
    {
        $this->imgName = $imgName;
        $this->file = $file;
        $this->destinationFolder = $destinationFolder;
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
     * @return \Cheetahmail\Campaigns\ImageHosting\Add
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
     * @return \Cheetahmail\Campaigns\ImageHosting\Add
     */
    public function setFile($file)
    {
        $this->file = $file;
        return $this;
    }

    /**
     * @return string
     */
    public function getDestinationFolder()
    {
        return $this->destinationFolder;
    }

    /**
     * @param string $destinationFolder
     * @return \Cheetahmail\Campaigns\ImageHosting\Add
     */
    public function setDestinationFolder($destinationFolder)
    {
        $this->destinationFolder = $destinationFolder;
        return $this;
    }
}
