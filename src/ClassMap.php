<?php

namespace Mjarestad\DHL\LevtidOnline;

/**
 * Class which returns the class map definition
 * @package
 */
class ClassMap
{
    /**
     * Returns the mapping between the WSDL Structs and generated Structs' classes
     * This array is sent to the \SoapClient when calling the WS
     * @return string[]
     */
    final public static function get()
    {
        return array(
            'GetTimeTableOnline' => '\\Mjarestad\\DHL\\LevtidOnline\\StructType\\GetTimeTableOnline',
            'GetTimeTableOnlineResponse' => '\\Mjarestad\\DHL\\LevtidOnline\\StructType\\GetTimeTableOnlineResponse',
            'GetTimeTableBookingOnline' => '\\Mjarestad\\DHL\\LevtidOnline\\StructType\\GetTimeTableBookingOnline',
            'GetTimeTableBookingOnlineResponse' => '\\Mjarestad\\DHL\\LevtidOnline\\StructType\\GetTimeTableBookingOnlineResponse',
            'TimeTableOnline' => '\\Mjarestad\\DHL\\LevtidOnline\\StructType\\TimeTableOnline',
            'Information' => '\\Mjarestad\\DHL\\LevtidOnline\\StructType\\Information',
            'ArrayOfTimeTable' => '\\Mjarestad\\DHL\\LevtidOnline\\ArrayType\\ArrayOfTimeTable',
            'TimeTable' => '\\Mjarestad\\DHL\\LevtidOnline\\StructType\\TimeTable',
            'TimeTableBookingOnline' => '\\Mjarestad\\DHL\\LevtidOnline\\StructType\\TimeTableBookingOnline',
            'Booking' => '\\Mjarestad\\DHL\\LevtidOnline\\StructType\\Booking',
        );
    }
}
