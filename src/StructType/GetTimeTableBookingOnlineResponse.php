<?php

namespace Mjarestad\DHL\LevtidOnline\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetTimeTableBookingOnlineResponse StructType
 * @subpackage Structs
 */
class GetTimeTableBookingOnlineResponse extends AbstractStructBase
{
    /**
     * The GetTimeTableBookingOnlineResult
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mjarestad\DHL\LevtidOnline\StructType\TimeTableBookingOnline
     */
    public $GetTimeTableBookingOnlineResult;
    /**
     * Constructor method for GetTimeTableBookingOnlineResponse
     * @uses GetTimeTableBookingOnlineResponse::setGetTimeTableBookingOnlineResult()
     * @param \Mjarestad\DHL\LevtidOnline\StructType\TimeTableBookingOnline $getTimeTableBookingOnlineResult
     */
    public function __construct(\Mjarestad\DHL\LevtidOnline\StructType\TimeTableBookingOnline $getTimeTableBookingOnlineResult = null)
    {
        $this
            ->setGetTimeTableBookingOnlineResult($getTimeTableBookingOnlineResult);
    }
    /**
     * Get GetTimeTableBookingOnlineResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mjarestad\DHL\LevtidOnline\StructType\TimeTableBookingOnline|null
     */
    public function getGetTimeTableBookingOnlineResult()
    {
        return isset($this->GetTimeTableBookingOnlineResult) ? $this->GetTimeTableBookingOnlineResult : null;
    }
    /**
     * Set GetTimeTableBookingOnlineResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mjarestad\DHL\LevtidOnline\StructType\TimeTableBookingOnline $getTimeTableBookingOnlineResult
     * @return \Mjarestad\DHL\LevtidOnline\StructType\GetTimeTableBookingOnlineResponse
     */
    public function setGetTimeTableBookingOnlineResult(\Mjarestad\DHL\LevtidOnline\StructType\TimeTableBookingOnline $getTimeTableBookingOnlineResult = null)
    {
        if (is_null($getTimeTableBookingOnlineResult) || (is_array($getTimeTableBookingOnlineResult) && empty($getTimeTableBookingOnlineResult))) {
            unset($this->GetTimeTableBookingOnlineResult);
        } else {
            $this->GetTimeTableBookingOnlineResult = $getTimeTableBookingOnlineResult;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mjarestad\DHL\LevtidOnline\StructType\GetTimeTableBookingOnlineResponse
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
