<?php

namespace Cheetahmail\Campaigns\BodyManager;

class ArrayOfCataDetails implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var CataDetails[] $CataDetails
     */
    protected $CataDetails = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return CataDetails[]
     */
    public function getCataDetails()
    {
      return $this->CataDetails;
    }

    /**
     * @param CataDetails[] $CataDetails
     * @return \Cheetahmail\Campaigns\BodyManager\ArrayOfCataDetails
     */
    public function setCataDetails(array $CataDetails = null)
    {
      $this->CataDetails = $CataDetails;
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
      return isset($this->CataDetails[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return CataDetails
     */
    public function offsetGet($offset)
    {
      return $this->CataDetails[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param CataDetails $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->CataDetails[] = $value;
      } else {
        $this->CataDetails[$offset] = $value;
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
      unset($this->CataDetails[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return CataDetails Return the current element
     */
    public function current()
    {
      return current($this->CataDetails);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->CataDetails);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->CataDetails);
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
      reset($this->CataDetails);
    }

    /**
     * Countable implementation
     *
     * @return CataDetails Return count of elements
     */
    public function count()
    {
      return count($this->CataDetails);
    }

}
