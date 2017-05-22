<?php

namespace Cheetahmail\Data\Subscribers;

class ArrayOfFieldDefinition implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var FieldDefinition[] $FieldDefinition
     */
    protected $FieldDefinition = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return FieldDefinition[]
     */
    public function getFieldDefinition()
    {
      return $this->FieldDefinition;
    }

    /**
     * @param FieldDefinition[] $FieldDefinition
     * @return \Cheetahmail\Data\Subscribers\ArrayOfFieldDefinition
     */
    public function setFieldDefinition(array $FieldDefinition = null)
    {
      $this->FieldDefinition = $FieldDefinition;
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
      return isset($this->FieldDefinition[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return FieldDefinition
     */
    public function offsetGet($offset)
    {
      return $this->FieldDefinition[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param FieldDefinition $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->FieldDefinition[] = $value;
      } else {
        $this->FieldDefinition[$offset] = $value;
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
      unset($this->FieldDefinition[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return FieldDefinition Return the current element
     */
    public function current()
    {
      return current($this->FieldDefinition);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->FieldDefinition);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->FieldDefinition);
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
      reset($this->FieldDefinition);
    }

    /**
     * Countable implementation
     *
     * @return FieldDefinition Return count of elements
     */
    public function count()
    {
      return count($this->FieldDefinition);
    }

}
