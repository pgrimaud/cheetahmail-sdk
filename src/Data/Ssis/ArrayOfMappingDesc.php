<?php
namespace Cheetahmail\Data\Ssis;

class ArrayOfMappingDesc implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var MappingDesc[] $MappingDesc
     */
    protected $MappingDesc = null;

    
    public function __construct()
    {
    }

    /**
     * @return MappingDesc[]
     */
    public function getMappingDesc()
    {
        return $this->MappingDesc;
    }

    /**
     * @param MappingDesc[] $MappingDesc
     * @return \Cheetahmail\Data\Ssis\ArrayOfMappingDesc
     */
    public function setMappingDesc(array $MappingDesc = null)
    {
        $this->MappingDesc = $MappingDesc;
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
        return isset($this->MappingDesc[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return MappingDesc
     */
    public function offsetGet($offset)
    {
        return $this->MappingDesc[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param MappingDesc $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (!isset($offset)) {
            $this->MappingDesc[] = $value;
        } else {
            $this->MappingDesc[$offset] = $value;
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
        unset($this->MappingDesc[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return MappingDesc Return the current element
     */
    public function current()
    {
        return current($this->MappingDesc);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
        next($this->MappingDesc);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
        return key($this->MappingDesc);
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
        reset($this->MappingDesc);
    }

    /**
     * Countable implementation
     *
     * @return MappingDesc Return count of elements
     */
    public function count()
    {
        return count($this->MappingDesc);
    }
}
