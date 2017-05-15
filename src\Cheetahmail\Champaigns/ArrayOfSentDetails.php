<?php

namespace Cheetahmail\Campaigns;

class ArrayOfSentDetails implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var SentDetails[] $SentDetails
     */
    protected $SentDetails = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SentDetails[]
     */
    public function getSentDetails()
    {
      return $this->SentDetails;
    }

    /**
     * @param SentDetails[] $SentDetails
     * @return \Cheetahmail\Campaigns\ArrayOfSentDetails
     */
    public function setSentDetails(array $SentDetails = null)
    {
      $this->SentDetails = $SentDetails;
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
      return isset($this->SentDetails[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return SentDetails
     */
    public function offsetGet($offset)
    {
      return $this->SentDetails[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param SentDetails $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->SentDetails[] = $value;
      } else {
        $this->SentDetails[$offset] = $value;
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
      unset($this->SentDetails[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return SentDetails Return the current element
     */
    public function current()
    {
      return current($this->SentDetails);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->SentDetails);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->SentDetails);
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
      reset($this->SentDetails);
    }

    /**
     * Countable implementation
     *
     * @return SentDetails Return count of elements
     */
    public function count()
    {
      return count($this->SentDetails);
    }

}
