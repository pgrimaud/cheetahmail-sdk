<?php
namespace Cheetahmail\Campaigns\Campaigns;

class ArrayOfSourceDetails implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var SourceDetails[] $SourceDetails
     */
    protected $SourceDetails = null;

    
    public function __construct()
    {
    }

    /**
     * @return SourceDetails[]
     */
    public function getSourceDetails()
    {
        return $this->SourceDetails;
    }

    /**
     * @param SourceDetails[] $SourceDetails
     * @return \Cheetahmail\Campaigns\Campaigns\ArrayOfSourceDetails
     */
    public function setSourceDetails(array $SourceDetails = null)
    {
        $this->SourceDetails = $SourceDetails;
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
        return isset($this->SourceDetails[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return SourceDetails
     */
    public function offsetGet($offset)
    {
        return $this->SourceDetails[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param SourceDetails $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (!isset($offset)) {
            $this->SourceDetails[] = $value;
        } else {
            $this->SourceDetails[$offset] = $value;
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
        unset($this->SourceDetails[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return SourceDetails Return the current element
     */
    public function current()
    {
        return current($this->SourceDetails);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
        next($this->SourceDetails);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
        return key($this->SourceDetails);
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
        reset($this->SourceDetails);
    }

    /**
     * Countable implementation
     *
     * @return SourceDetails Return count of elements
     */
    public function count()
    {
        return count($this->SourceDetails);
    }
}
