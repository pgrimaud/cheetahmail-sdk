<?php
namespace Cheetahmail\Campaigns\Campaigns;

class CampaignParams
{

    /**
     * @var boolean $isPrivate
     */
    protected $isPrivate = null;

    /**
     * @var string $description
     */
    protected $description = null;

    /**
     * @var FilterParams $filters
     */
    protected $filters = null;

    /**
     * @var int $folderId
     */
    protected $folderId = null;

    /**
     * @param boolean $isPrivate
     * @param FilterParams $filters
     * @param int $folderId
     */
    public function __construct($isPrivate, $filters, $folderId)
    {
        $this->isPrivate = $isPrivate;
        $this->filters = $filters;
        $this->folderId = $folderId;
    }

    /**
     * @return boolean
     */
    public function getIsPrivate()
    {
        return $this->isPrivate;
    }

    /**
     * @param boolean $isPrivate
     * @return \Cheetahmail\Campaigns\Campaigns\CampaignParams
     */
    public function setIsPrivate($isPrivate)
    {
        $this->isPrivate = $isPrivate;
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
     * @return \Cheetahmail\Campaigns\Campaigns\CampaignParams
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return FilterParams
     */
    public function getFilters()
    {
        return $this->filters;
    }

    /**
     * @param FilterParams $filters
     * @return \Cheetahmail\Campaigns\Campaigns\CampaignParams
     */
    public function setFilters($filters)
    {
        $this->filters = $filters;
        return $this;
    }

    /**
     * @return int
     */
    public function getFolderId()
    {
        return $this->folderId;
    }

    /**
     * @param int $folderId
     * @return \Cheetahmail\Campaigns\Campaigns\CampaignParams
     */
    public function setFolderId($folderId)
    {
        $this->folderId = $folderId;
        return $this;
    }
}
