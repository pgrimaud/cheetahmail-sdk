<?php
namespace Cheetahmail\Campaigns\ImageHosting;

class RenameDirectory
{

    /**
     * @var string $folderSource
     */
    protected $folderSource = null;

    /**
     * @var string $newFolder
     */
    protected $newFolder = null;

    /**
     * @param string $folderSource
     * @param string $newFolder
     */
    public function __construct($folderSource, $newFolder)
    {
        $this->folderSource = $folderSource;
        $this->newFolder = $newFolder;
    }

    /**
     * @return string
     */
    public function getFolderSource()
    {
        return $this->folderSource;
    }

    /**
     * @param string $folderSource
     * @return \Cheetahmail\Campaigns\ImageHosting\RenameDirectory
     */
    public function setFolderSource($folderSource)
    {
        $this->folderSource = $folderSource;
        return $this;
    }

    /**
     * @return string
     */
    public function getNewFolder()
    {
        return $this->newFolder;
    }

    /**
     * @param string $newFolder
     * @return \Cheetahmail\Campaigns\ImageHosting\RenameDirectory
     */
    public function setNewFolder($newFolder)
    {
        $this->newFolder = $newFolder;
        return $this;
    }
}
