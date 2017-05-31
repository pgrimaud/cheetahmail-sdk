<?php
namespace Cheetahmail\Campaigns\Content;

class GetKeyMTO
{

    /**
     * @var int $containerId
     */
    protected $containerId = null;

    /**
     * @var string $correspondanceKey
     */
    protected $correspondanceKey = null;

    /**
     * @param int $containerId
     * @param string $correspondanceKey
     */
    public function __construct($containerId, $correspondanceKey)
    {
        $this->containerId = $containerId;
        $this->correspondanceKey = $correspondanceKey;
    }

    /**
     * @return int
     */
    public function getContainerId()
    {
        return $this->containerId;
    }

    /**
     * @param int $containerId
     * @return \Cheetahmail\Campaigns\Content\GetKeyMTO
     */
    public function setContainerId($containerId)
    {
        $this->containerId = $containerId;
        return $this;
    }

    /**
     * @return string
     */
    public function getCorrespondanceKey()
    {
        return $this->correspondanceKey;
    }

    /**
     * @param string $correspondanceKey
     * @return \Cheetahmail\Campaigns\Content\GetKeyMTO
     */
    public function setCorrespondanceKey($correspondanceKey)
    {
        $this->correspondanceKey = $correspondanceKey;
        return $this;
    }
}
