<?php
namespace Cheetahmail\Campaigns\Campaigns;

class ArrayOfSentParams implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var SentParams[] $SentParams
     */
    protected $SentParams = null;

    
    public function __construct()
    {
    }

    /**
     * @return SentParams[]
     */
    public function getSentParams()
    {
        return $this->SentParams;
    }

    /**
     * @param SentParams[] $SentParams
     * @return \Cheetahmail\Campaigns\Campaigns\ArrayOfSentParams
     */
    public function setSentParams(array $SentParams = null)
    {
        $this->SentParams = $SentParams;
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
        return isset($this->SentParams[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return SentParams
     */
    public function offsetGet($offset)
    {
        return $this->SentParams[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param SentParams $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (!isset($offset)) {
            $this->SentParams[] = $value;
        } else {
            $this->SentParams[$offset] = $value;
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
        unset($this->SentParams[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return SentParams Return the current element
     */
    public function current()
    {
        return current($this->SentParams);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
        next($this->SentParams);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
        return key($this->SentParams);
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
        reset($this->SentParams);
    }

    /**
     * Countable implementation
     *
     * @return SentParams Return count of elements
     */
    public function count()
    {
        return count($this->SentParams);
    }
}
