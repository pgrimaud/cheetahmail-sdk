<?php
namespace Cheetahmail\Campaigns\ImageHosting;

class AddDirectory
{

    /**
     * @var string $folder
     */
    protected $folder = null;

    /**
     * @param string $folder
     */
    public function __construct($folder)
    {
        $this->folder = $folder;
    }

    /**
     * @return string
     */
    public function getFolder()
    {
        return $this->folder;
    }

    /**
     * @param string $folder
     * @return \Cheetahmail\Campaigns\ImageHosting\AddDirectory
     */
    public function setFolder($folder)
    {
        $this->folder = $folder;
        return $this;
    }
}
