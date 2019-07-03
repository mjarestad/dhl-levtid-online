<?php

namespace Mjarestad\DHL\LevtidOnline\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Information StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:Information
 * @subpackage Structs
 */
class Information extends AbstractStructBase
{
    /**
     * The ArrivingTerminal
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int
     */
    public $ArrivingTerminal;
    /**
     * The CreateTimeStamp
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $CreateTimeStamp;
    /**
     * The CustomerID
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $CustomerID;
    /**
     * The DeliveryCountryCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $DeliveryCountryCode;
    /**
     * The DeliveryPostCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $DeliveryPostCode;
    /**
     * The EarliestSentDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $EarliestSentDate;
    /**
     * The GetTimeTableOnlineID
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int
     */
    public $GetTimeTableOnlineID;
    /**
     * The NoOfDays
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int
     */
    public $NoOfDays;
    /**
     * The PickupCountryCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $PickupCountryCode;
    /**
     * The PickupPostCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $PickupPostCode;
    /**
     * The RequestType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int
     */
    public $RequestType;
    /**
     * The ResponseStatus
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int
     */
    public $ResponseStatus;
    /**
     * The ResponseTimeStamp
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $ResponseTimeStamp;
    /**
     * The Type
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int
     */
    public $Type;
    /**
     * Constructor method for Information
     * @uses Information::setArrivingTerminal()
     * @uses Information::setCreateTimeStamp()
     * @uses Information::setCustomerID()
     * @uses Information::setDeliveryCountryCode()
     * @uses Information::setDeliveryPostCode()
     * @uses Information::setEarliestSentDate()
     * @uses Information::setGetTimeTableOnlineID()
     * @uses Information::setNoOfDays()
     * @uses Information::setPickupCountryCode()
     * @uses Information::setPickupPostCode()
     * @uses Information::setRequestType()
     * @uses Information::setResponseStatus()
     * @uses Information::setResponseTimeStamp()
     * @uses Information::setType()
     * @param int $arrivingTerminal
     * @param string $createTimeStamp
     * @param string $customerID
     * @param string $deliveryCountryCode
     * @param string $deliveryPostCode
     * @param string $earliestSentDate
     * @param int $getTimeTableOnlineID
     * @param int $noOfDays
     * @param string $pickupCountryCode
     * @param string $pickupPostCode
     * @param int $requestType
     * @param int $responseStatus
     * @param string $responseTimeStamp
     * @param int $type
     */
    public function __construct($arrivingTerminal = null, $createTimeStamp = null, $customerID = null, $deliveryCountryCode = null, $deliveryPostCode = null, $earliestSentDate = null, $getTimeTableOnlineID = null, $noOfDays = null, $pickupCountryCode = null, $pickupPostCode = null, $requestType = null, $responseStatus = null, $responseTimeStamp = null, $type = null)
    {
        $this
            ->setArrivingTerminal($arrivingTerminal)
            ->setCreateTimeStamp($createTimeStamp)
            ->setCustomerID($customerID)
            ->setDeliveryCountryCode($deliveryCountryCode)
            ->setDeliveryPostCode($deliveryPostCode)
            ->setEarliestSentDate($earliestSentDate)
            ->setGetTimeTableOnlineID($getTimeTableOnlineID)
            ->setNoOfDays($noOfDays)
            ->setPickupCountryCode($pickupCountryCode)
            ->setPickupPostCode($pickupPostCode)
            ->setRequestType($requestType)
            ->setResponseStatus($responseStatus)
            ->setResponseTimeStamp($responseTimeStamp)
            ->setType($type);
    }
    /**
     * Get ArrivingTerminal value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getArrivingTerminal()
    {
        return isset($this->ArrivingTerminal) ? $this->ArrivingTerminal : null;
    }
    /**
     * Set ArrivingTerminal value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $arrivingTerminal
     * @return \Mjarestad\DHL\LevtidOnline\StructType\Information
     */
    public function setArrivingTerminal($arrivingTerminal = null)
    {
        // validation for constraint: int
        if (!is_null($arrivingTerminal) && !(is_int($arrivingTerminal) || ctype_digit($arrivingTerminal))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($arrivingTerminal, true), gettype($arrivingTerminal)), __LINE__);
        }
        if (is_null($arrivingTerminal) || (is_array($arrivingTerminal) && empty($arrivingTerminal))) {
            unset($this->ArrivingTerminal);
        } else {
            $this->ArrivingTerminal = $arrivingTerminal;
        }
        return $this;
    }
    /**
     * Get CreateTimeStamp value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCreateTimeStamp()
    {
        return isset($this->CreateTimeStamp) ? $this->CreateTimeStamp : null;
    }
    /**
     * Set CreateTimeStamp value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $createTimeStamp
     * @return \Mjarestad\DHL\LevtidOnline\StructType\Information
     */
    public function setCreateTimeStamp($createTimeStamp = null)
    {
        // validation for constraint: string
        if (!is_null($createTimeStamp) && !is_string($createTimeStamp)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($createTimeStamp, true), gettype($createTimeStamp)), __LINE__);
        }
        if (is_null($createTimeStamp) || (is_array($createTimeStamp) && empty($createTimeStamp))) {
            unset($this->CreateTimeStamp);
        } else {
            $this->CreateTimeStamp = $createTimeStamp;
        }
        return $this;
    }
    /**
     * Get CustomerID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCustomerID()
    {
        return isset($this->CustomerID) ? $this->CustomerID : null;
    }
    /**
     * Set CustomerID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $customerID
     * @return \Mjarestad\DHL\LevtidOnline\StructType\Information
     */
    public function setCustomerID($customerID = null)
    {
        // validation for constraint: string
        if (!is_null($customerID) && !is_string($customerID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customerID, true), gettype($customerID)), __LINE__);
        }
        if (is_null($customerID) || (is_array($customerID) && empty($customerID))) {
            unset($this->CustomerID);
        } else {
            $this->CustomerID = $customerID;
        }
        return $this;
    }
    /**
     * Get DeliveryCountryCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDeliveryCountryCode()
    {
        return isset($this->DeliveryCountryCode) ? $this->DeliveryCountryCode : null;
    }
    /**
     * Set DeliveryCountryCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $deliveryCountryCode
     * @return \Mjarestad\DHL\LevtidOnline\StructType\Information
     */
    public function setDeliveryCountryCode($deliveryCountryCode = null)
    {
        // validation for constraint: string
        if (!is_null($deliveryCountryCode) && !is_string($deliveryCountryCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($deliveryCountryCode, true), gettype($deliveryCountryCode)), __LINE__);
        }
        if (is_null($deliveryCountryCode) || (is_array($deliveryCountryCode) && empty($deliveryCountryCode))) {
            unset($this->DeliveryCountryCode);
        } else {
            $this->DeliveryCountryCode = $deliveryCountryCode;
        }
        return $this;
    }
    /**
     * Get DeliveryPostCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDeliveryPostCode()
    {
        return isset($this->DeliveryPostCode) ? $this->DeliveryPostCode : null;
    }
    /**
     * Set DeliveryPostCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $deliveryPostCode
     * @return \Mjarestad\DHL\LevtidOnline\StructType\Information
     */
    public function setDeliveryPostCode($deliveryPostCode = null)
    {
        // validation for constraint: string
        if (!is_null($deliveryPostCode) && !is_string($deliveryPostCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($deliveryPostCode, true), gettype($deliveryPostCode)), __LINE__);
        }
        if (is_null($deliveryPostCode) || (is_array($deliveryPostCode) && empty($deliveryPostCode))) {
            unset($this->DeliveryPostCode);
        } else {
            $this->DeliveryPostCode = $deliveryPostCode;
        }
        return $this;
    }
    /**
     * Get EarliestSentDate value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getEarliestSentDate()
    {
        return isset($this->EarliestSentDate) ? $this->EarliestSentDate : null;
    }
    /**
     * Set EarliestSentDate value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $earliestSentDate
     * @return \Mjarestad\DHL\LevtidOnline\StructType\Information
     */
    public function setEarliestSentDate($earliestSentDate = null)
    {
        // validation for constraint: string
        if (!is_null($earliestSentDate) && !is_string($earliestSentDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($earliestSentDate, true), gettype($earliestSentDate)), __LINE__);
        }
        if (is_null($earliestSentDate) || (is_array($earliestSentDate) && empty($earliestSentDate))) {
            unset($this->EarliestSentDate);
        } else {
            $this->EarliestSentDate = $earliestSentDate;
        }
        return $this;
    }
    /**
     * Get GetTimeTableOnlineID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getGetTimeTableOnlineID()
    {
        return isset($this->GetTimeTableOnlineID) ? $this->GetTimeTableOnlineID : null;
    }
    /**
     * Set GetTimeTableOnlineID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $getTimeTableOnlineID
     * @return \Mjarestad\DHL\LevtidOnline\StructType\Information
     */
    public function setGetTimeTableOnlineID($getTimeTableOnlineID = null)
    {
        // validation for constraint: int
        if (!is_null($getTimeTableOnlineID) && !(is_int($getTimeTableOnlineID) || ctype_digit($getTimeTableOnlineID))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($getTimeTableOnlineID, true), gettype($getTimeTableOnlineID)), __LINE__);
        }
        if (is_null($getTimeTableOnlineID) || (is_array($getTimeTableOnlineID) && empty($getTimeTableOnlineID))) {
            unset($this->GetTimeTableOnlineID);
        } else {
            $this->GetTimeTableOnlineID = $getTimeTableOnlineID;
        }
        return $this;
    }
    /**
     * Get NoOfDays value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getNoOfDays()
    {
        return isset($this->NoOfDays) ? $this->NoOfDays : null;
    }
    /**
     * Set NoOfDays value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $noOfDays
     * @return \Mjarestad\DHL\LevtidOnline\StructType\Information
     */
    public function setNoOfDays($noOfDays = null)
    {
        // validation for constraint: int
        if (!is_null($noOfDays) && !(is_int($noOfDays) || ctype_digit($noOfDays))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($noOfDays, true), gettype($noOfDays)), __LINE__);
        }
        if (is_null($noOfDays) || (is_array($noOfDays) && empty($noOfDays))) {
            unset($this->NoOfDays);
        } else {
            $this->NoOfDays = $noOfDays;
        }
        return $this;
    }
    /**
     * Get PickupCountryCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPickupCountryCode()
    {
        return isset($this->PickupCountryCode) ? $this->PickupCountryCode : null;
    }
    /**
     * Set PickupCountryCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $pickupCountryCode
     * @return \Mjarestad\DHL\LevtidOnline\StructType\Information
     */
    public function setPickupCountryCode($pickupCountryCode = null)
    {
        // validation for constraint: string
        if (!is_null($pickupCountryCode) && !is_string($pickupCountryCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pickupCountryCode, true), gettype($pickupCountryCode)), __LINE__);
        }
        if (is_null($pickupCountryCode) || (is_array($pickupCountryCode) && empty($pickupCountryCode))) {
            unset($this->PickupCountryCode);
        } else {
            $this->PickupCountryCode = $pickupCountryCode;
        }
        return $this;
    }
    /**
     * Get PickupPostCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPickupPostCode()
    {
        return isset($this->PickupPostCode) ? $this->PickupPostCode : null;
    }
    /**
     * Set PickupPostCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $pickupPostCode
     * @return \Mjarestad\DHL\LevtidOnline\StructType\Information
     */
    public function setPickupPostCode($pickupPostCode = null)
    {
        // validation for constraint: string
        if (!is_null($pickupPostCode) && !is_string($pickupPostCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pickupPostCode, true), gettype($pickupPostCode)), __LINE__);
        }
        if (is_null($pickupPostCode) || (is_array($pickupPostCode) && empty($pickupPostCode))) {
            unset($this->PickupPostCode);
        } else {
            $this->PickupPostCode = $pickupPostCode;
        }
        return $this;
    }
    /**
     * Get RequestType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getRequestType()
    {
        return isset($this->RequestType) ? $this->RequestType : null;
    }
    /**
     * Set RequestType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $requestType
     * @return \Mjarestad\DHL\LevtidOnline\StructType\Information
     */
    public function setRequestType($requestType = null)
    {
        // validation for constraint: int
        if (!is_null($requestType) && !(is_int($requestType) || ctype_digit($requestType))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($requestType, true), gettype($requestType)), __LINE__);
        }
        if (is_null($requestType) || (is_array($requestType) && empty($requestType))) {
            unset($this->RequestType);
        } else {
            $this->RequestType = $requestType;
        }
        return $this;
    }
    /**
     * Get ResponseStatus value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getResponseStatus()
    {
        return isset($this->ResponseStatus) ? $this->ResponseStatus : null;
    }
    /**
     * Set ResponseStatus value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $responseStatus
     * @return \Mjarestad\DHL\LevtidOnline\StructType\Information
     */
    public function setResponseStatus($responseStatus = null)
    {
        // validation for constraint: int
        if (!is_null($responseStatus) && !(is_int($responseStatus) || ctype_digit($responseStatus))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($responseStatus, true), gettype($responseStatus)), __LINE__);
        }
        if (is_null($responseStatus) || (is_array($responseStatus) && empty($responseStatus))) {
            unset($this->ResponseStatus);
        } else {
            $this->ResponseStatus = $responseStatus;
        }
        return $this;
    }
    /**
     * Get ResponseTimeStamp value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getResponseTimeStamp()
    {
        return isset($this->ResponseTimeStamp) ? $this->ResponseTimeStamp : null;
    }
    /**
     * Set ResponseTimeStamp value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $responseTimeStamp
     * @return \Mjarestad\DHL\LevtidOnline\StructType\Information
     */
    public function setResponseTimeStamp($responseTimeStamp = null)
    {
        // validation for constraint: string
        if (!is_null($responseTimeStamp) && !is_string($responseTimeStamp)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($responseTimeStamp, true), gettype($responseTimeStamp)), __LINE__);
        }
        if (is_null($responseTimeStamp) || (is_array($responseTimeStamp) && empty($responseTimeStamp))) {
            unset($this->ResponseTimeStamp);
        } else {
            $this->ResponseTimeStamp = $responseTimeStamp;
        }
        return $this;
    }
    /**
     * Get Type value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getType()
    {
        return isset($this->Type) ? $this->Type : null;
    }
    /**
     * Set Type value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $type
     * @return \Mjarestad\DHL\LevtidOnline\StructType\Information
     */
    public function setType($type = null)
    {
        // validation for constraint: int
        if (!is_null($type) && !(is_int($type) || ctype_digit($type))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($type, true), gettype($type)), __LINE__);
        }
        if (is_null($type) || (is_array($type) && empty($type))) {
            unset($this->Type);
        } else {
            $this->Type = $type;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mjarestad\DHL\LevtidOnline\StructType\Information
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
