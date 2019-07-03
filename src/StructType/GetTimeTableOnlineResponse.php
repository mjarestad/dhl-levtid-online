<?php

namespace Mjarestad\DHL\LevtidOnline\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetTimeTableOnlineResponse StructType
 * @subpackage Structs
 */
class GetTimeTableOnlineResponse extends AbstractStructBase
{
    /**
     * The GetTimeTableOnlineResult
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mjarestad\DHL\LevtidOnline\StructType\TimeTableOnline
     */
    public $GetTimeTableOnlineResult;
    /**
     * Constructor method for GetTimeTableOnlineResponse
     * @uses GetTimeTableOnlineResponse::setGetTimeTableOnlineResult()
     * @param \Mjarestad\DHL\LevtidOnline\StructType\TimeTableOnline $getTimeTableOnlineResult
     */
    public function __construct(\Mjarestad\DHL\LevtidOnline\StructType\TimeTableOnline $getTimeTableOnlineResult = null)
    {
        $this
            ->setGetTimeTableOnlineResult($getTimeTableOnlineResult);
    }
    /**
     * Get GetTimeTableOnlineResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mjarestad\DHL\LevtidOnline\StructType\TimeTableOnline|null
     */
    public function getGetTimeTableOnlineResult()
    {
        return isset($this->GetTimeTableOnlineResult) ? $this->GetTimeTableOnlineResult : null;
    }
    /**
     * Set GetTimeTableOnlineResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mjarestad\DHL\LevtidOnline\StructType\TimeTableOnline $getTimeTableOnlineResult
     * @return \Mjarestad\DHL\LevtidOnline\StructType\GetTimeTableOnlineResponse
     */
    public function setGetTimeTableOnlineResult(\Mjarestad\DHL\LevtidOnline\StructType\TimeTableOnline $getTimeTableOnlineResult = null)
    {
        if (is_null($getTimeTableOnlineResult) || (is_array($getTimeTableOnlineResult) && empty($getTimeTableOnlineResult))) {
            unset($this->GetTimeTableOnlineResult);
        } else {
            $this->GetTimeTableOnlineResult = $getTimeTableOnlineResult;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mjarestad\DHL\LevtidOnline\StructType\GetTimeTableOnlineResponse
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
