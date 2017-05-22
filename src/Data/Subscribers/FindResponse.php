<?php
namespace Cheetahmail\Data\Subscribers;

class FindResponse
{

    /**
     * @var ArrayOfInt $FindResult
     */
    protected $FindResult = null;

    /**
     * @param ArrayOfInt $FindResult
     */
    public function __construct($FindResult)
    {
        $this->FindResult = $FindResult;
    }

    /**
     * @return ArrayOfInt
     */
    public function getFindResult()
    {
        return $this->FindResult;
    }

    /**
     * @param ArrayOfInt $FindResult
     * @return \Cheetahmail\Data\Subscribers\FindResponse
     */
    public function setFindResult($FindResult)
    {
        $this->FindResult = $FindResult;
        return $this;
    }
}
