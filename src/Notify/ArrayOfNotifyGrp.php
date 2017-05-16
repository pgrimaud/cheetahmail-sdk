<?php

namespace Cheetahmail\Notify;

class ArrayOfNotifyGrp implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var NotifyGrp[] $NotifyGrp
     */
    protected $NotifyGrp = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return NotifyGrp[]
     */
    public function getNotifyGrp()
    {
      return $this->NotifyGrp;
    }

    /**
     * @param NotifyGrp[] $NotifyGrp
     * @return \Cheetahmail\Notify\ArrayOfNotifyGrp
     */
    public function setNotifyGrp(array $NotifyGrp = null)
    {
      $this->NotifyGrp = $NotifyGrp;
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
      return isset($this->NotifyGrp[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return NotifyGrp
     */
    public function offsetGet($offset)
    {
      return $this->NotifyGrp[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param NotifyGrp $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->NotifyGrp[] = $value;
      } else {
        $this->NotifyGrp[$offset] = $value;
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
      unset($this->NotifyGrp[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return NotifyGrp Return the current element
     */
    public function current()
    {
      return current($this->NotifyGrp);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->NotifyGrp);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->NotifyGrp);
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
      reset($this->NotifyGrp);
    }

    /**
     * Countable implementation
     *
     * @return NotifyGrp Return count of elements
     */
    public function count()
    {
      return count($this->NotifyGrp);
    }

}
