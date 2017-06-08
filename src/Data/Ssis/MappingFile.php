<?php
namespace Cheetahmail\Data\Ssis;

class MappingFile
{

    /**
     * @var int $Idmapp
     */
    protected $Idmapp = null;

    /**
     * @var boolean $Header
     */
    protected $Header = null;

    /**
     * @var string $ColumnDelimiter
     */
    protected $ColumnDelimiter = null;

    /**
     * @var string $RowDelimiter
     */
    protected $RowDelimiter = null;

    /**
     * @var string $TextQualifer
     */
    protected $TextQualifer = null;

    /**
     * @var string $FileName
     */
    protected $FileName = null;

    /**
     * @param int $Idmapp
     * @param boolean $Header
     */
    public function __construct($Idmapp, $Header)
    {
        $this->Idmapp = $Idmapp;
        $this->Header = $Header;
    }

    /**
     * @return int
     */
    public function getIdmapp()
    {
        return $this->Idmapp;
    }

    /**
     * @param int $Idmapp
     * @return \Cheetahmail\Data\Ssis\MappingFile
     */
    public function setIdmapp($Idmapp)
    {
        $this->Idmapp = $Idmapp;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getHeader()
    {
        return $this->Header;
    }

    /**
     * @param boolean $Header
     * @return \Cheetahmail\Data\Ssis\MappingFile
     */
    public function setHeader($Header)
    {
        $this->Header = $Header;
        return $this;
    }

    /**
     * @return string
     */
    public function getColumnDelimiter()
    {
        return $this->ColumnDelimiter;
    }

    /**
     * @param string $ColumnDelimiter
     * @return \Cheetahmail\Data\Ssis\MappingFile
     */
    public function setColumnDelimiter($ColumnDelimiter)
    {
        $this->ColumnDelimiter = $ColumnDelimiter;
        return $this;
    }

    /**
     * @return string
     */
    public function getRowDelimiter()
    {
        return $this->RowDelimiter;
    }

    /**
     * @param string $RowDelimiter
     * @return \Cheetahmail\Data\Ssis\MappingFile
     */
    public function setRowDelimiter($RowDelimiter)
    {
        $this->RowDelimiter = $RowDelimiter;
        return $this;
    }

    /**
     * @return string
     */
    public function getTextQualifer()
    {
        return $this->TextQualifer;
    }

    /**
     * @param string $TextQualifer
     * @return \Cheetahmail\Data\Ssis\MappingFile
     */
    public function setTextQualifer($TextQualifer)
    {
        $this->TextQualifer = $TextQualifer;
        return $this;
    }

    /**
     * @return string
     */
    public function getFileName()
    {
        return $this->FileName;
    }

    /**
     * @param string $FileName
     * @return \Cheetahmail\Data\Ssis\MappingFile
     */
    public function setFileName($FileName)
    {
        $this->FileName = $FileName;
        return $this;
    }
}
