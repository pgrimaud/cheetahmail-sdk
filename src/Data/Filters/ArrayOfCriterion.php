<?php
namespace Cheetahmail\Data\Filters;

class ArrayOfCriterion implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var Criterion[] $Criterion
     */
    protected $Criterion = null;

    
    public function __construct()
    {
    }

    /**
     * @return Criterion[]
     */
    public function getCriterion()
    {
        return $this->Criterion;
    }

    /**
     * @param Criterion[] $Criterion
     * @return \Cheetahmail\Data\Filters\ArrayOfCriterion
     */
    public function setCriterion(array $Criterion = null)
    {
        $this->Criterion = $Criterion;
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
        return isset($this->Criterion[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return Criterion
     */
    public function offsetGet($offset)
    {
        return $this->Criterion[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param Criterion $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (!isset($offset)) {
            $this->Criterion[] = $value;
        } else {
            $this->Criterion[$offset] = $value;
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
        unset($this->Criterion[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return Criterion Return the current element
     */
    public function current()
    {
        return current($this->Criterion);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
        next($this->Criterion);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
        return key($this->Criterion);
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
        reset($this->Criterion);
    }

    /**
     * Countable implementation
     *
     * @return Criterion Return count of elements
     */
    public function count()
    {
        return count($this->Criterion);
    }
}
