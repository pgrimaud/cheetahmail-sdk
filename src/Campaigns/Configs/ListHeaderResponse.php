<?php
namespace Cheetahmail\Campaigns\Configs;

class ListHeaderResponse
{

    /**
     * @var ArrayOfHeader $ListHeaderResult
     */
    protected $ListHeaderResult = null;

    /**
     * @param ArrayOfHeader $ListHeaderResult
     */
    public function __construct($ListHeaderResult)
    {
        $this->ListHeaderResult = $ListHeaderResult;
    }

    /**
     * @return ArrayOfHeader
     */
    public function getListHeaderResult()
    {
        return $this->ListHeaderResult;
    }

    /**
     * @param ArrayOfHeader $ListHeaderResult
     * @return \Cheetahmail\Campaigns\Configs\ListHeaderResponse
     */
    public function setListHeaderResult($ListHeaderResult)
    {
        $this->ListHeaderResult = $ListHeaderResult;
        return $this;
    }
}
