<?php

namespace Cheetahmail\Campaigns\BodyManager;

class ArrayOfWebAnalyticDetails implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var WebAnalyticDetails[] $WebAnalyticDetails
     */
    protected $WebAnalyticDetails = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return WebAnalyticDetails[]
     */
    public function getWebAnalyticDetails()
    {
      return $this->WebAnalyticDetails;
    }

    /**
     * @param WebAnalyticDetails[] $WebAnalyticDetails
     * @return \Cheetahmail\Campaigns\BodyManager\ArrayOfWebAnalyticDetails
     */
    public function setWebAnalyticDetails(array $WebAnalyticDetails = null)
    {
      $this->WebAnalyticDetails = $WebAnalyticDetails;
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
      return isset($this->WebAnalyticDetails[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return WebAnalyticDetails
     */
    public function offsetGet($offset)
    {
      return $this->WebAnalyticDetails[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param WebAnalyticDetails $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->WebAnalyticDetails[] = $value;
      } else {
        $this->WebAnalyticDetails[$offset] = $value;
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
      unset($this->WebAnalyticDetails[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return WebAnalyticDetails Return the current element
     */
    public function current()
    {
      return current($this->WebAnalyticDetails);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->WebAnalyticDetails);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->WebAnalyticDetails);
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
      reset($this->WebAnalyticDetails);
    }

    /**
     * Countable implementation
     *
     * @return WebAnalyticDetails Return count of elements
     */
    public function count()
    {
      return count($this->WebAnalyticDetails);
    }

}
