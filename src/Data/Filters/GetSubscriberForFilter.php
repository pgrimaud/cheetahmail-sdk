<?php
namespace Cheetahmail\Data\Filters;

class GetSubscriberForFilter
{

    /**
     * @var int $_nidFilter
     */
    protected $_nidFilter = null;

    /**
     * @param int $_nidFilter
     */
    public function __construct($_nidFilter)
    {
        $this->_nidFilter = $_nidFilter;
    }

    /**
     * @return int
     */
    public function get_nidFilter()
    {
        return $this->_nidFilter;
    }

    /**
     * @param int $_nidFilter
     * @return \Cheetahmail\Data\Filters\GetSubscriberForFilter
     */
    public function set_nidFilter($_nidFilter)
    {
        $this->_nidFilter = $_nidFilter;
        return $this;
    }
}
