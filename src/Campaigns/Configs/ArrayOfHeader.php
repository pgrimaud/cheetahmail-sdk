<?php
namespace Cheetahmail\Campaigns\Configs;

class ArrayOfHeader implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var Header[] $Header
     */
    protected $Header = null;

    
    public function __construct()
    {
    }

    /**
     * @return Header[]
     */
    public function getHeader()
    {
        return $this->Header;
    }

    /**
     * @param Header[] $Header
     * @return \Cheetahmail\Campaigns\Configs\ArrayOfHeader
     */
    public function setHeader(array $Header = null)
    {
        $this->Header = $Header;
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
        return isset($this->Header[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return Header
     */
    public function offsetGet($offset)
    {
        return $this->Header[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param Header $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (!isset($offset)) {
            $this->Header[] = $value;
        } else {
            $this->Header[$offset] = $value;
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
        unset($this->Header[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return Header Return the current element
     */
    public function current()
    {
        return current($this->Header);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
        next($this->Header);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
        return key($this->Header);
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
        reset($this->Header);
    }

    /**
     * Countable implementation
     *
     * @return Header Return count of elements
     */
    public function count()
    {
        return count($this->Header);
    }
}
