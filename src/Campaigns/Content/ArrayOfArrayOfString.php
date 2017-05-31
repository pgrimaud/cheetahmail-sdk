<?php
namespace Cheetahmail\Campaigns\Content;

class ArrayOfArrayOfString implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ArrayOfString[] $ArrayOfString
     */
    protected $ArrayOfString = null;

    
    public function __construct()
    {
    }

    /**
     * @return ArrayOfString[]
     */
    public function getArrayOfString()
    {
        return $this->ArrayOfString;
    }

    /**
     * @param ArrayOfString[] $ArrayOfString
     * @return \Cheetahmail\Campaigns\Content\ArrayOfArrayOfString
     */
    public function setArrayOfString(array $ArrayOfString = null)
    {
        $this->ArrayOfString = $ArrayOfString;
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
        return isset($this->ArrayOfString[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ArrayOfString
     */
    public function offsetGet($offset)
    {
        return $this->ArrayOfString[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ArrayOfString $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (!isset($offset)) {
            $this->ArrayOfString[] = $value;
        } else {
            $this->ArrayOfString[$offset] = $value;
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
        unset($this->ArrayOfString[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ArrayOfString Return the current element
     */
    public function current()
    {
        return current($this->ArrayOfString);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
        next($this->ArrayOfString);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
        return key($this->ArrayOfString);
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
        reset($this->ArrayOfString);
    }

    /**
     * Countable implementation
     *
     * @return ArrayOfString Return count of elements
     */
    public function count()
    {
        return count($this->ArrayOfString);
    }
}
