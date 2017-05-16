<?php
namespace Cheetahmail\Filters;

class ArrayOfArrayOfArrayOfString implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ArrayOfArrayOfString[] $ArrayOfArrayOfString
     */
    protected $ArrayOfArrayOfString = null;

    
    public function __construct()
    {
    }

    /**
     * @return ArrayOfArrayOfString[]
     */
    public function getArrayOfArrayOfString()
    {
        return $this->ArrayOfArrayOfString;
    }

    /**
     * @param ArrayOfArrayOfString[] $ArrayOfArrayOfString
     * @return \Cheetahmail\Filters\ArrayOfArrayOfArrayOfString
     */
    public function setArrayOfArrayOfString(array $ArrayOfArrayOfString = null)
    {
        $this->ArrayOfArrayOfString = $ArrayOfArrayOfString;
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
        return isset($this->ArrayOfArrayOfString[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ArrayOfArrayOfString
     */
    public function offsetGet($offset)
    {
        return $this->ArrayOfArrayOfString[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ArrayOfArrayOfString $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (!isset($offset)) {
            $this->ArrayOfArrayOfString[] = $value;
        } else {
            $this->ArrayOfArrayOfString[$offset] = $value;
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
        unset($this->ArrayOfArrayOfString[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ArrayOfArrayOfString Return the current element
     */
    public function current()
    {
        return current($this->ArrayOfArrayOfString);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
        next($this->ArrayOfArrayOfString);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
        return key($this->ArrayOfArrayOfString);
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
        reset($this->ArrayOfArrayOfString);
    }

    /**
     * Countable implementation
     *
     * @return ArrayOfArrayOfString Return count of elements
     */
    public function count()
    {
        return count($this->ArrayOfArrayOfString);
    }
}
