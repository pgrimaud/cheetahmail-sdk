<?php
namespace Cheetahmail\Statistics\Stats;

class ArrayOfSMSCampaignOverview implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var SMSCampaignOverview[] $SMSCampaignOverview
     */
    protected $SMSCampaignOverview = null;

    
    public function __construct()
    {
    }

    /**
     * @return SMSCampaignOverview[]
     */
    public function getSMSCampaignOverview()
    {
        return $this->SMSCampaignOverview;
    }

    /**
     * @param SMSCampaignOverview[] $SMSCampaignOverview
     * @return \Cheetahmail\Statistics\Stats\ArrayOfSMSCampaignOverview
     */
    public function setSMSCampaignOverview(array $SMSCampaignOverview = null)
    {
        $this->SMSCampaignOverview = $SMSCampaignOverview;
        return $this;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset An offset to check for
     * @return boolean true on success or false on failure
     */
    public function offsetExists($offset)
    {
        return isset($this->SMSCampaignOverview[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return SMSCampaignOverview
     */
    public function offsetGet($offset)
    {
        return $this->SMSCampaignOverview[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param SMSCampaignOverview $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (!isset($offset)) {
            $this->SMSCampaignOverview[] = $value;
        } else {
            $this->SMSCampaignOverview[$offset] = $value;
        }
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->SMSCampaignOverview[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return SMSCampaignOverview Return the current element
     */
    public function current()
    {
        return current($this->SMSCampaignOverview);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
        next($this->SMSCampaignOverview);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
        return key($this->SMSCampaignOverview);
    }

    /**
     * Iterator implementation
     *
     * @return boolean Return the validity of the current position
     */
    public function valid()
    {
        return $this->key() !== null;
    }

    /**
     * Iterator implementation
     * Rewind the Iterator to the first element
     *
     * @return void
     */
    public function rewind()
    {
        reset($this->SMSCampaignOverview);
    }

    /**
     * Countable implementation
     *
     * @return SMSCampaignOverview Return count of elements
     */
    public function count()
    {
        return count($this->SMSCampaignOverview);
    }
}
