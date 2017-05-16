<?php
namespace Cheetahmail\Campaigns;

class ArrayOfCampaignsListDetails implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var CampaignsListDetails[] $CampaignsListDetails
     */
    protected $CampaignsListDetails = null;

    
    public function __construct()
    {
    }

    /**
     * @return CampaignsListDetails[]
     */
    public function getCampaignsListDetails()
    {
        return $this->CampaignsListDetails;
    }

    /**
     * @param CampaignsListDetails[] $CampaignsListDetails
     * @return \Cheetahmail\Campaigns\ArrayOfCampaignsListDetails
     */
    public function setCampaignsListDetails(array $CampaignsListDetails = null)
    {
        $this->CampaignsListDetails = $CampaignsListDetails;
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
        return isset($this->CampaignsListDetails[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return CampaignsListDetails
     */
    public function offsetGet($offset)
    {
        return $this->CampaignsListDetails[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param CampaignsListDetails $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (!isset($offset)) {
            $this->CampaignsListDetails[] = $value;
        } else {
            $this->CampaignsListDetails[$offset] = $value;
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
        unset($this->CampaignsListDetails[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return CampaignsListDetails Return the current element
     */
    public function current()
    {
        return current($this->CampaignsListDetails);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
        next($this->CampaignsListDetails);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
        return key($this->CampaignsListDetails);
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
        reset($this->CampaignsListDetails);
    }

    /**
     * Countable implementation
     *
     * @return CampaignsListDetails Return count of elements
     */
    public function count()
    {
        return count($this->CampaignsListDetails);
    }
}
