<?php

namespace Mjarestad\DHL\LevtidOnline\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Get ServiceType
 * @subpackage Services
 */
class Get extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named GetTimeTableOnline
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Mjarestad\DHL\LevtidOnline\StructType\GetTimeTableOnline $parameters
     * @return \Mjarestad\DHL\LevtidOnline\StructType\GetTimeTableOnlineResponse|bool
     */
    public function GetTimeTableOnline(\Mjarestad\DHL\LevtidOnline\StructType\GetTimeTableOnline $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->GetTimeTableOnline($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetTimeTableBookingOnline
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Mjarestad\DHL\LevtidOnline\StructType\GetTimeTableBookingOnline $parameters
     * @return \Mjarestad\DHL\LevtidOnline\StructType\GetTimeTableBookingOnlineResponse|bool
     */
    public function GetTimeTableBookingOnline(\Mjarestad\DHL\LevtidOnline\StructType\GetTimeTableBookingOnline $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->GetTimeTableBookingOnline($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Mjarestad\DHL\LevtidOnline\StructType\GetTimeTableBookingOnlineResponse|\Mjarestad\DHL\LevtidOnline\StructType\GetTimeTableOnlineResponse
     */
    public function getResult()
    {
        return parent::getResult();
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
