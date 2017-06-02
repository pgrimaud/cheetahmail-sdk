<?php
namespace Cheetahmail\Campaigns\Sms;

class ArrayOfCampaign implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var Campaign[] $Campaign
     */
    protected $Campaign = null;

    
    public function __construct()
    {
    }

    /**
     * @return Campaign[]
     */
    public function getCampaign()
    {
        return $this->Campaign;
    }

    /**
     * @param Campaign[] $Campaign
     * @return \Cheetahmail\Campaigns\Sms\ArrayOfCampaign
     */
    public function setCampaign(array $Campaign = null)
    {
        $this->Campaign = $Campaign;
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
        return isset($this->Campaign[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return Campaign
     */
    public function offsetGet($offset)
    {
        return $this->Campaign[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param Campaign $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (!isset($offset)) {
            $this->Campaign[] = $value;
        } else {
            $this->Campaign[$offset] = $value;
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
        unset($this->Campaign[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return Campaign Return the current element
     */
    public function current()
    {
        return current($this->Campaign);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
        next($this->Campaign);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
        return key($this->Campaign);
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
        reset($this->Campaign);
    }

    /**
     * Countable implementation
     *
     * @return Campaign Return count of elements
     */
    public function count()
    {
        return count($this->Campaign);
    }
}
