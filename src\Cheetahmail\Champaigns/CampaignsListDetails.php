<?php

namespace Cheetahmail\Campaigns;

class CampaignsListDetails
{

    /**
     * @var int $id
     */
    protected $id = null;

    /**
     * @var string $description
     */
    protected $description = null;

    /**
     * @var STATUS $status
     */
    protected $status = null;

    /**
     * @param int $id
     * @param STATUS $status
     */
    public function __construct($id, $status)
    {
      $this->id = $id;
      $this->status = $status;
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
     * @return \Cheetahmail\Campaigns\CampaignsListDetails
     */
    public function setId($id)
    {
      $this->id = $id;
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
     * @return \Cheetahmail\Campaigns\CampaignsListDetails
     */
    public function setDescription($description)
    {
      $this->description = $description;
      return $this;
    }

    /**
     * @return STATUS
     */
    public function getStatus()
    {
      return $this->status;
    }

    /**
     * @param STATUS $status
     * @return \Cheetahmail\Campaigns\CampaignsListDetails
     */
    public function setStatus($status)
    {
      $this->status = $status;
      return $this;
    }

}
