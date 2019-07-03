<?php

namespace Mjarestad\DHL\LevtidOnline\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TimeTableOnline StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:TimeTableOnline
 * @subpackage Structs
 */
class TimeTableOnline extends AbstractStructBase
{
    /**
     * The Information
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mjarestad\DHL\LevtidOnline\StructType\Information
     */
    public $Information;
    /**
     * The TimeTableList
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mjarestad\DHL\LevtidOnline\ArrayType\ArrayOfTimeTable
     */
    public $TimeTableList;
    /**
     * Constructor method for TimeTableOnline
     * @uses TimeTableOnline::setInformation()
     * @uses TimeTableOnline::setTimeTableList()
     * @param \Mjarestad\DHL\LevtidOnline\StructType\Information $information
     * @param \Mjarestad\DHL\LevtidOnline\ArrayType\ArrayOfTimeTable $timeTableList
     */
    public function __construct(\Mjarestad\DHL\LevtidOnline\StructType\Information $information = null, \Mjarestad\DHL\LevtidOnline\ArrayType\ArrayOfTimeTable $timeTableList = null)
    {
        $this
            ->setInformation($information)
            ->setTimeTableList($timeTableList);
    }
    /**
     * Get Information value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mjarestad\DHL\LevtidOnline\StructType\Information|null
     */
    public function getInformation()
    {
        return isset($this->Information) ? $this->Information : null;
    }
    /**
     * Set Information value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mjarestad\DHL\LevtidOnline\StructType\Information $information
     * @return \Mjarestad\DHL\LevtidOnline\StructType\TimeTableOnline
     */
    public function setInformation(\Mjarestad\DHL\LevtidOnline\StructType\Information $information = null)
    {
        if (is_null($information) || (is_array($information) && empty($information))) {
            unset($this->Information);
        } else {
            $this->Information = $information;
        }
        return $this;
    }
    /**
     * Get TimeTableList value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mjarestad\DHL\LevtidOnline\ArrayType\ArrayOfTimeTable|null
     */
    public function getTimeTableList()
    {
        return isset($this->TimeTableList) ? $this->TimeTableList : null;
    }
    /**
     * Set TimeTableList value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mjarestad\DHL\LevtidOnline\ArrayType\ArrayOfTimeTable $timeTableList
     * @return \Mjarestad\DHL\LevtidOnline\StructType\TimeTableOnline
     */
    public function setTimeTableList(\Mjarestad\DHL\LevtidOnline\ArrayType\ArrayOfTimeTable $timeTableList = null)
    {
        if (is_null($timeTableList) || (is_array($timeTableList) && empty($timeTableList))) {
            unset($this->TimeTableList);
        } else {
            $this->TimeTableList = $timeTableList;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mjarestad\DHL\LevtidOnline\StructType\TimeTableOnline
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
