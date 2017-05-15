<?php

namespace Cheetahmail\Campaigns;

class ArrayOfMessageParams implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var MessageParams[] $MessageParams
     */
    protected $MessageParams = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return MessageParams[]
     */
    public function getMessageParams()
    {
      return $this->MessageParams;
    }

    /**
     * @param MessageParams[] $MessageParams
     * @return \Cheetahmail\Campaigns\ArrayOfMessageParams
     */
    public function setMessageParams(array $MessageParams = null)
    {
      $this->MessageParams = $MessageParams;
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
      return isset($this->MessageParams[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return MessageParams
     */
    public function offsetGet($offset)
    {
      return $this->MessageParams[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param MessageParams $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->MessageParams[] = $value;
      } else {
        $this->MessageParams[$offset] = $value;
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
      unset($this->MessageParams[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return MessageParams Return the current element
     */
    public function current()
    {
      return current($this->MessageParams);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->MessageParams);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->MessageParams);
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
      reset($this->MessageParams);
    }

    /**
     * Countable implementation
     *
     * @return MessageParams Return count of elements
     */
    public function count()
    {
      return count($this->MessageParams);
    }

}
