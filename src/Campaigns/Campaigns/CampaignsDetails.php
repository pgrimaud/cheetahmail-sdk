<?php
namespace Cheetahmail\Campaigns\Campaigns;

class CampaignsDetails
{

    /**
     * @var string $description
     */
    protected $description = null;

    /**
     * @var int $id
     */
    protected $id = null;

    /**
     * @var FilterParams $filters
     */
    protected $filters = null;

    /**
     * @var STATUS $state
     */
    protected $state = null;

    /**
     * @var ArrayOfSentDetails $sents
     */
    protected $sents = null;

    /**
     * @param int $id
     * @param FilterParams $filters
     * @param STATUS $state
     */
    public function __construct($id, $filters, $state)
    {
        $this->id = $id;
        $this->filters = $filters;
        $this->state = $state;
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
     * @return \Cheetahmail\Campaigns\Campaigns\CampaignsDetails
     */
    public function setDescription($description)
    {
        $this->description = $description;
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
     * @return \Cheetahmail\Campaigns\Campaigns\CampaignsDetails
     */
    public function setId($id)
    {
        $this->id = $id;
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
     * @return \Cheetahmail\Campaigns\Campaigns\CampaignsDetails
     */
    public function setFilters($filters)
    {
        $this->filters = $filters;
        return $this;
    }

    /**
     * @return STATUS
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param STATUS $state
     * @return \Cheetahmail\Campaigns\Campaigns\CampaignsDetails
     */
    public function setState($state)
    {
        $this->state = $state;
        return $this;
    }

    /**
     * @return ArrayOfSentDetails
     */
    public function getSents()
    {
        return $this->sents;
    }

    /**
     * @param ArrayOfSentDetails $sents
     * @return \Cheetahmail\Campaigns\Campaigns\CampaignsDetails
     */
    public function setSents($sents)
    {
        $this->sents = $sents;
        return $this;
    }
}
