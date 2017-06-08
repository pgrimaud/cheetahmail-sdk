<?php
namespace Cheetahmail\Data\Ssis;

class ArrayOfSchedulerDesc implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var SchedulerDesc[] $SchedulerDesc
     */
    protected $SchedulerDesc = null;

    
    public function __construct()
    {
    }

    /**
     * @return SchedulerDesc[]
     */
    public function getSchedulerDesc()
    {
        return $this->SchedulerDesc;
    }

    /**
     * @param SchedulerDesc[] $SchedulerDesc
     * @return \Cheetahmail\Data\Ssis\ArrayOfSchedulerDesc
     */
    public function setSchedulerDesc(array $SchedulerDesc = null)
    {
        $this->SchedulerDesc = $SchedulerDesc;
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
        return isset($this->SchedulerDesc[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return SchedulerDesc
     */
    public function offsetGet($offset)
    {
        return $this->SchedulerDesc[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param SchedulerDesc $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (!isset($offset)) {
            $this->SchedulerDesc[] = $value;
        } else {
            $this->SchedulerDesc[$offset] = $value;
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
        unset($this->SchedulerDesc[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return SchedulerDesc Return the current element
     */
    public function current()
    {
        return current($this->SchedulerDesc);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
        next($this->SchedulerDesc);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
        return key($this->SchedulerDesc);
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
        reset($this->SchedulerDesc);
    }

    /**
     * Countable implementation
     *
     * @return SchedulerDesc Return count of elements
     */
    public function count()
    {
        return count($this->SchedulerDesc);
    }
}
