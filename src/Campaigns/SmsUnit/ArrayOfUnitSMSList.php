<?php
namespace Cheetahmail\Campaigns\SmsUnit;

class ArrayOfUnitSMSList implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var UnitSMSList[] $UnitSMSList
     */
    protected $UnitSMSList = null;

    
    public function __construct()
    {
    }

    /**
     * @return UnitSMSList[]
     */
    public function getUnitSMSList()
    {
        return $this->UnitSMSList;
    }

    /**
     * @param UnitSMSList[] $UnitSMSList
     * @return \Cheetahmail\Campaigns\SmsUnit\ArrayOfUnitSMSList
     */
    public function setUnitSMSList(array $UnitSMSList = null)
    {
        $this->UnitSMSList = $UnitSMSList;
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
        return isset($this->UnitSMSList[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return UnitSMSList
     */
    public function offsetGet($offset)
    {
        return $this->UnitSMSList[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param UnitSMSList $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (!isset($offset)) {
            $this->UnitSMSList[] = $value;
        } else {
            $this->UnitSMSList[$offset] = $value;
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
        unset($this->UnitSMSList[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return UnitSMSList Return the current element
     */
    public function current()
    {
        return current($this->UnitSMSList);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
        next($this->UnitSMSList);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
        return key($this->UnitSMSList);
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
        reset($this->UnitSMSList);
    }

    /**
     * Countable implementation
     *
     * @return UnitSMSList Return count of elements
     */
    public function count()
    {
        return count($this->UnitSMSList);
    }
}
