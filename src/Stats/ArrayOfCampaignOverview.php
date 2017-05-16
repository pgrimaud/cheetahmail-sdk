<?php

namespace Cheetahmail\Stats;

class ArrayOfCampaignOverview implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var CampaignOverview[] $CampaignOverview
     */
    protected $CampaignOverview = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return CampaignOverview[]
     */
    public function getCampaignOverview()
    {
      return $this->CampaignOverview;
    }

    /**
     * @param CampaignOverview[] $CampaignOverview
     * @return \Cheetahmail\Stats\ArrayOfCampaignOverview
     */
    public function setCampaignOverview(array $CampaignOverview = null)
    {
      $this->CampaignOverview = $CampaignOverview;
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
      return isset($this->CampaignOverview[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return CampaignOverview
     */
    public function offsetGet($offset)
    {
      return $this->CampaignOverview[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param CampaignOverview $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->CampaignOverview[] = $value;
      } else {
        $this->CampaignOverview[$offset] = $value;
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
      unset($this->CampaignOverview[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return CampaignOverview Return the current element
     */
    public function current()
    {
      return current($this->CampaignOverview);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->CampaignOverview);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->CampaignOverview);
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
      reset($this->CampaignOverview);
    }

    /**
     * Countable implementation
     *
     * @return CampaignOverview Return count of elements
     */
    public function count()
    {
      return count($this->CampaignOverview);
    }

}
