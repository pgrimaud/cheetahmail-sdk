<?php
namespace Cheetahmail\Campaigns;

class ArrayOfDetailsCamp implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var DetailsCamp[] $DetailsCamp
     */
    protected $DetailsCamp = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return DetailsCamp[]
     */
    public function getDetailsCamp()
    {
      return $this->DetailsCamp;
    }

    /**
     * @param DetailsCamp[] $DetailsCamp
     * @return \Cheetahmail\Campaigns\ArrayOfDetailsCamp
     */
    public function setDetailsCamp(array $DetailsCamp = null)
    {
      $this->DetailsCamp = $DetailsCamp;
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
      return isset($this->DetailsCamp[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return DetailsCamp
     */
    public function offsetGet($offset)
    {
      return $this->DetailsCamp[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param DetailsCamp $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->DetailsCamp[] = $value;
      } else {
        $this->DetailsCamp[$offset] = $value;
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
      unset($this->DetailsCamp[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return DetailsCamp Return the current element
     */
    public function current()
    {
      return current($this->DetailsCamp);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->DetailsCamp);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->DetailsCamp);
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
      reset($this->DetailsCamp);
    }

    /**
     * Countable implementation
     *
     * @return DetailsCamp Return count of elements
     */
    public function count()
    {
      return count($this->DetailsCamp);
    }

}
