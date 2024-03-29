<?php

namespace Mjarestad\DHL\LevtidOnline\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TimeTableBookingOnline StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:TimeTableBookingOnline
 * @subpackage Structs
 */
class TimeTableBookingOnline extends AbstractStructBase
{
    /**
     * The Booking
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mjarestad\DHL\LevtidOnline\StructType\Booking
     */
    public $Booking;
    /**
     * Constructor method for TimeTableBookingOnline
     * @uses TimeTableBookingOnline::setBooking()
     * @param \Mjarestad\DHL\LevtidOnline\StructType\Booking $booking
     */
    public function __construct(\Mjarestad\DHL\LevtidOnline\StructType\Booking $booking = null)
    {
        $this
            ->setBooking($booking);
    }
    /**
     * Get Booking value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mjarestad\DHL\LevtidOnline\StructType\Booking|null
     */
    public function getBooking()
    {
        return isset($this->Booking) ? $this->Booking : null;
    }
    /**
     * Set Booking value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mjarestad\DHL\LevtidOnline\StructType\Booking $booking
     * @return \Mjarestad\DHL\LevtidOnline\StructType\TimeTableBookingOnline
     */
    public function setBooking(\Mjarestad\DHL\LevtidOnline\StructType\Booking $booking = null)
    {
        if (is_null($booking) || (is_array($booking) && empty($booking))) {
            unset($this->Booking);
        } else {
            $this->Booking = $booking;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mjarestad\DHL\LevtidOnline\StructType\TimeTableBookingOnline
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
