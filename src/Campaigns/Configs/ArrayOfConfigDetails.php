<?php
namespace Cheetahmail\Campaigns\Configs;

class ArrayOfConfigDetails implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ConfigDetails[] $ConfigDetails
     */
    protected $ConfigDetails = null;

    
    public function __construct()
    {
    }

    /**
     * @return ConfigDetails[]
     */
    public function getConfigDetails()
    {
        return $this->ConfigDetails;
    }

    /**
     * @param ConfigDetails[] $ConfigDetails
     * @return \Cheetahmail\Campaigns\Configs\ArrayOfConfigDetails
     */
    public function setConfigDetails(array $ConfigDetails = null)
    {
        $this->ConfigDetails = $ConfigDetails;
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
        return isset($this->ConfigDetails[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ConfigDetails
     */
    public function offsetGet($offset)
    {
        return $this->ConfigDetails[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ConfigDetails $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (!isset($offset)) {
            $this->ConfigDetails[] = $value;
        } else {
            $this->ConfigDetails[$offset] = $value;
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
        unset($this->ConfigDetails[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ConfigDetails Return the current element
     */
    public function current()
    {
        return current($this->ConfigDetails);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
        next($this->ConfigDetails);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
        return key($this->ConfigDetails);
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
        reset($this->ConfigDetails);
    }

    /**
     * Countable implementation
     *
     * @return ConfigDetails Return count of elements
     */
    public function count()
    {
        return count($this->ConfigDetails);
    }
}
