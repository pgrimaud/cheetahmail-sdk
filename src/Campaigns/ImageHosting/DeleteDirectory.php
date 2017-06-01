<?php
namespace Cheetahmail\Campaigns\ImageHosting;

class DeleteDirectory
{

    /**
     * @var string $folders
     */
    protected $folders = null;

    /**
     * @param string $folders
     */
    public function __construct($folders)
    {
        $this->folders = $folders;
    }

    /**
     * @return string
     */
    public function getFolders()
    {
        return $this->folders;
    }

    /**
     * @param string $folders
     * @return \Cheetahmail\Campaigns\ImageHosting\DeleteDirectory
     */
    public function setFolders($folders)
    {
        $this->folders = $folders;
        return $this;
    }
}
