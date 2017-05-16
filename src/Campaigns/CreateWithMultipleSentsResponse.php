<?php
namespace Cheetahmail\Campaigns;

class CreateWithMultipleSentsResponse
{

    /**
     * @var int $CreateWithMultipleSentsResult
     */
    protected $CreateWithMultipleSentsResult = null;

    /**
     * @param int $CreateWithMultipleSentsResult
     */
    public function __construct($CreateWithMultipleSentsResult)
    {
      $this->CreateWithMultipleSentsResult = $CreateWithMultipleSentsResult;
    }

    /**
     * @return int
     */
    public function getCreateWithMultipleSentsResult()
    {
      return $this->CreateWithMultipleSentsResult;
    }

    /**
     * @param int $CreateWithMultipleSentsResult
     * @return \Cheetahmail\Campaigns\CreateWithMultipleSentsResponse
     */
    public function setCreateWithMultipleSentsResult($CreateWithMultipleSentsResult)
    {
      $this->CreateWithMultipleSentsResult = $CreateWithMultipleSentsResult;
      return $this;
    }

}
