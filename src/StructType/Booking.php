<?php

namespace Mjarestad\DHL\LevtidOnline\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Booking StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:Booking
 * @subpackage Structs
 */
class Booking extends AbstractStructBase
{
    /**
     * The BookedReserved_Flag
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var bool
     */
    public $BookedReserved_Flag;
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
     * The DCPlace
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $DCPlace;
    /**
     * The DeliveryDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $DeliveryDate;
    /**
     * The DeliveryPostCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $DeliveryPostCode;
    /**
     * The DeliveryTimeFrom
     * Meta informations extracted from the WSDL
     * - base: xs:duration
     * - maxInclusive: P10675199DT2H48M5.4775807S
     * - minInclusive: -P10675199DT2H48M5.4775808S
     * - minOccurs: 0
     * - nillable: true
     * - pattern: \-?P(\d*D)?(T(\d*H)?(\d*M)?(\d*(\.\d*)?S)?)?
     * - type: tns:duration
     * @var string
     */
    public $DeliveryTimeFrom;
    /**
     * The DeliveryTimeTo
     * Meta informations extracted from the WSDL
     * - base: xs:duration
     * - maxInclusive: P10675199DT2H48M5.4775807S
     * - minInclusive: -P10675199DT2H48M5.4775808S
     * - minOccurs: 0
     * - nillable: true
     * - pattern: \-?P(\d*D)?(T(\d*H)?(\d*M)?(\d*(\.\d*)?S)?)?
     * - type: tns:duration
     * @var string
     */
    public $DeliveryTimeTo;
    /**
     * The GetTimeTableOnlineID
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int
     */
    public $GetTimeTableOnlineID;
    /**
     * The Id
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $Id;
    /**
     * The Operation
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int
     */
    public $Operation;
    /**
     * The PickupDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $PickupDate;
    /**
     * The RequestType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int
     */
    public $RequestType;
    /**
     * The ResponseID
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int
     */
    public $ResponseID;
    /**
     * The ResponseStatus
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int
     */
    public $ResponseStatus;
    /**
     * The ResponseText
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $ResponseText;
    /**
     * The ResponseTextLabel
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $ResponseTextLabel;
    /**
     * The ResponseTimeStamp
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $ResponseTimeStamp;
    /**
     * The RouteID
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $RouteID;
    /**
     * The Type
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int
     */
    public $Type;
    /**
     * The TypeOfDelivery
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int
     */
    public $TypeOfDelivery;
    /**
     * Constructor method for Booking
     * @uses Booking::setBookedReserved_Flag()
     * @uses Booking::setCreateTimeStamp()
     * @uses Booking::setCustomerID()
     * @uses Booking::setDCPlace()
     * @uses Booking::setDeliveryDate()
     * @uses Booking::setDeliveryPostCode()
     * @uses Booking::setDeliveryTimeFrom()
     * @uses Booking::setDeliveryTimeTo()
     * @uses Booking::setGetTimeTableOnlineID()
     * @uses Booking::setId()
     * @uses Booking::setOperation()
     * @uses Booking::setPickupDate()
     * @uses Booking::setRequestType()
     * @uses Booking::setResponseID()
     * @uses Booking::setResponseStatus()
     * @uses Booking::setResponseText()
     * @uses Booking::setResponseTextLabel()
     * @uses Booking::setResponseTimeStamp()
     * @uses Booking::setRouteID()
     * @uses Booking::setType()
     * @uses Booking::setTypeOfDelivery()
     * @param bool $bookedReserved_Flag
     * @param string $createTimeStamp
     * @param string $customerID
     * @param string $dCPlace
     * @param string $deliveryDate
     * @param string $deliveryPostCode
     * @param string $deliveryTimeFrom
     * @param string $deliveryTimeTo
     * @param int $getTimeTableOnlineID
     * @param int $id
     * @param int $operation
     * @param string $pickupDate
     * @param int $requestType
     * @param int $responseID
     * @param int $responseStatus
     * @param string $responseText
     * @param string $responseTextLabel
     * @param string $responseTimeStamp
     * @param string $routeID
     * @param int $type
     * @param int $typeOfDelivery
     */
    public function __construct($bookedReserved_Flag = null, $createTimeStamp = null, $customerID = null, $dCPlace = null, $deliveryDate = null, $deliveryPostCode = null, $deliveryTimeFrom = null, $deliveryTimeTo = null, $getTimeTableOnlineID = null, $id = null, $operation = null, $pickupDate = null, $requestType = null, $responseID = null, $responseStatus = null, $responseText = null, $responseTextLabel = null, $responseTimeStamp = null, $routeID = null, $type = null, $typeOfDelivery = null)
    {
        $this
            ->setBookedReserved_Flag($bookedReserved_Flag)
            ->setCreateTimeStamp($createTimeStamp)
            ->setCustomerID($customerID)
            ->setDCPlace($dCPlace)
            ->setDeliveryDate($deliveryDate)
            ->setDeliveryPostCode($deliveryPostCode)
            ->setDeliveryTimeFrom($deliveryTimeFrom)
            ->setDeliveryTimeTo($deliveryTimeTo)
            ->setGetTimeTableOnlineID($getTimeTableOnlineID)
            ->setId($id)
            ->setOperation($operation)
            ->setPickupDate($pickupDate)
            ->setRequestType($requestType)
            ->setResponseID($responseID)
            ->setResponseStatus($responseStatus)
            ->setResponseText($responseText)
            ->setResponseTextLabel($responseTextLabel)
            ->setResponseTimeStamp($responseTimeStamp)
            ->setRouteID($routeID)
            ->setType($type)
            ->setTypeOfDelivery($typeOfDelivery);
    }
    /**
     * Get BookedReserved_Flag value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return bool|null
     */
    public function getBookedReserved_Flag()
    {
        return isset($this->BookedReserved_Flag) ? $this->BookedReserved_Flag : null;
    }
    /**
     * Set BookedReserved_Flag value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param bool $bookedReserved_Flag
     * @return \Mjarestad\DHL\LevtidOnline\StructType\Booking
     */
    public function setBookedReserved_Flag($bookedReserved_Flag = null)
    {
        // validation for constraint: boolean
        if (!is_null($bookedReserved_Flag) && !is_bool($bookedReserved_Flag)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($bookedReserved_Flag, true), gettype($bookedReserved_Flag)), __LINE__);
        }
        if (is_null($bookedReserved_Flag) || (is_array($bookedReserved_Flag) && empty($bookedReserved_Flag))) {
            unset($this->BookedReserved_Flag);
        } else {
            $this->BookedReserved_Flag = $bookedReserved_Flag;
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
     * @return \Mjarestad\DHL\LevtidOnline\StructType\Booking
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
     * @return \Mjarestad\DHL\LevtidOnline\StructType\Booking
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
     * Get DCPlace value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDCPlace()
    {
        return isset($this->DCPlace) ? $this->DCPlace : null;
    }
    /**
     * Set DCPlace value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $dCPlace
     * @return \Mjarestad\DHL\LevtidOnline\StructType\Booking
     */
    public function setDCPlace($dCPlace = null)
    {
        // validation for constraint: string
        if (!is_null($dCPlace) && !is_string($dCPlace)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dCPlace, true), gettype($dCPlace)), __LINE__);
        }
        if (is_null($dCPlace) || (is_array($dCPlace) && empty($dCPlace))) {
            unset($this->DCPlace);
        } else {
            $this->DCPlace = $dCPlace;
        }
        return $this;
    }
    /**
     * Get DeliveryDate value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDeliveryDate()
    {
        return isset($this->DeliveryDate) ? $this->DeliveryDate : null;
    }
    /**
     * Set DeliveryDate value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $deliveryDate
     * @return \Mjarestad\DHL\LevtidOnline\StructType\Booking
     */
    public function setDeliveryDate($deliveryDate = null)
    {
        // validation for constraint: string
        if (!is_null($deliveryDate) && !is_string($deliveryDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($deliveryDate, true), gettype($deliveryDate)), __LINE__);
        }
        if (is_null($deliveryDate) || (is_array($deliveryDate) && empty($deliveryDate))) {
            unset($this->DeliveryDate);
        } else {
            $this->DeliveryDate = $deliveryDate;
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
     * @return \Mjarestad\DHL\LevtidOnline\StructType\Booking
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
     * Get DeliveryTimeFrom value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDeliveryTimeFrom()
    {
        return isset($this->DeliveryTimeFrom) ? $this->DeliveryTimeFrom : null;
    }
    /**
     * Set DeliveryTimeFrom value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $deliveryTimeFrom
     * @return \Mjarestad\DHL\LevtidOnline\StructType\Booking
     */
    public function setDeliveryTimeFrom($deliveryTimeFrom = null)
    {
        // validation for constraint: string
        if (!is_null($deliveryTimeFrom) && !is_string($deliveryTimeFrom)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($deliveryTimeFrom, true), gettype($deliveryTimeFrom)), __LINE__);
        }
        // validation for constraint: maxInclusive(P10675199DT2H48M5.4775807S)
        if (!is_null($deliveryTimeFrom) && false === mb_strpos($deliveryTimeFrom, '-') && ($time = (string) time()) && \DateTime::createFromFormat('U', $time)->add(new \DateInterval(preg_replace('/(.*)(\.[0-9]*S)/', '$1S', str_replace('-', '', $deliveryTimeFrom)))) > \DateTime::createFromFormat('U', $time)->add(new \DateInterval(preg_replace('/(.*)(\.[0-9]*S)/', '$1S', 'P10675199DT2H48M5.4775807S')))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must be chronologically less than or equal to P10675199DT2H48M5.4775807S', var_export($deliveryTimeFrom, true)), __LINE__);
        }
        // validation for constraint: minInclusive(-P10675199DT2H48M5.4775808S)
        if (!is_null($deliveryTimeFrom) && false !== mb_strpos($deliveryTimeFrom, '-') && ($time = (string) time()) && \DateTime::createFromFormat('U', $time)->sub(new \DateInterval(preg_replace('/(.*)(\.[0-9]*S)/', '$1S', str_replace('-', '', $deliveryTimeFrom)))) < \DateTime::createFromFormat('U', $time)->sub(new \DateInterval(preg_replace('/(.*)(\.[0-9]*S)/', '$1S', 'P10675199DT2H48M5.4775808S')))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must be chronologically greater than or equal to -P10675199DT2H48M5.4775808S', var_export($deliveryTimeFrom, true)), __LINE__);
        }
        // validation for constraint: pattern(\-?P(\d*D)?(T(\d*H)?(\d*M)?(\d*(\.\d*)?S)?)?)
        if (!is_null($deliveryTimeFrom) && !preg_match('/\\-?P(\\d*D)?(T(\\d*H)?(\\d*M)?(\\d*(\\.\\d*)?S)?)?/', $deliveryTimeFrom)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression \-?P(\d*D)?(T(\d*H)?(\d*M)?(\d*(\.\d*)?S)?)?', var_export($deliveryTimeFrom, true)), __LINE__);
        }
        if (is_null($deliveryTimeFrom) || (is_array($deliveryTimeFrom) && empty($deliveryTimeFrom))) {
            unset($this->DeliveryTimeFrom);
        } else {
            $this->DeliveryTimeFrom = $deliveryTimeFrom;
        }
        return $this;
    }
    /**
     * Get DeliveryTimeTo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDeliveryTimeTo()
    {
        return isset($this->DeliveryTimeTo) ? $this->DeliveryTimeTo : null;
    }
    /**
     * Set DeliveryTimeTo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $deliveryTimeTo
     * @return \Mjarestad\DHL\LevtidOnline\StructType\Booking
     */
    public function setDeliveryTimeTo($deliveryTimeTo = null)
    {
        // validation for constraint: string
        if (!is_null($deliveryTimeTo) && !is_string($deliveryTimeTo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($deliveryTimeTo, true), gettype($deliveryTimeTo)), __LINE__);
        }
        // validation for constraint: maxInclusive(P10675199DT2H48M5.4775807S)
        if (!is_null($deliveryTimeTo) && false === mb_strpos($deliveryTimeTo, '-') && ($time = (string) time()) && \DateTime::createFromFormat('U', $time)->add(new \DateInterval(preg_replace('/(.*)(\.[0-9]*S)/', '$1S', str_replace('-', '', $deliveryTimeTo)))) > \DateTime::createFromFormat('U', $time)->add(new \DateInterval(preg_replace('/(.*)(\.[0-9]*S)/', '$1S', 'P10675199DT2H48M5.4775807S')))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must be chronologically less than or equal to P10675199DT2H48M5.4775807S', var_export($deliveryTimeTo, true)), __LINE__);
        }
        // validation for constraint: minInclusive(-P10675199DT2H48M5.4775808S)
        if (!is_null($deliveryTimeTo) && false !== mb_strpos($deliveryTimeTo, '-') && ($time = (string) time()) && \DateTime::createFromFormat('U', $time)->sub(new \DateInterval(preg_replace('/(.*)(\.[0-9]*S)/', '$1S', str_replace('-', '', $deliveryTimeTo)))) < \DateTime::createFromFormat('U', $time)->sub(new \DateInterval(preg_replace('/(.*)(\.[0-9]*S)/', '$1S', 'P10675199DT2H48M5.4775808S')))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must be chronologically greater than or equal to -P10675199DT2H48M5.4775808S', var_export($deliveryTimeTo, true)), __LINE__);
        }
        // validation for constraint: pattern(\-?P(\d*D)?(T(\d*H)?(\d*M)?(\d*(\.\d*)?S)?)?)
        if (!is_null($deliveryTimeTo) && !preg_match('/\\-?P(\\d*D)?(T(\\d*H)?(\\d*M)?(\\d*(\\.\\d*)?S)?)?/', $deliveryTimeTo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression \-?P(\d*D)?(T(\d*H)?(\d*M)?(\d*(\.\d*)?S)?)?', var_export($deliveryTimeTo, true)), __LINE__);
        }
        if (is_null($deliveryTimeTo) || (is_array($deliveryTimeTo) && empty($deliveryTimeTo))) {
            unset($this->DeliveryTimeTo);
        } else {
            $this->DeliveryTimeTo = $deliveryTimeTo;
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
     * @return \Mjarestad\DHL\LevtidOnline\StructType\Booking
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
     * Get Id value
     * @return int|null
     */
    public function getId()
    {
        return $this->Id;
    }
    /**
     * Set Id value
     * @param int $id
     * @return \Mjarestad\DHL\LevtidOnline\StructType\Booking
     */
    public function setId($id = null)
    {
        // validation for constraint: int
        if (!is_null($id) && !(is_int($id) || ctype_digit($id))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        $this->Id = $id;
        return $this;
    }
    /**
     * Get Operation value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getOperation()
    {
        return isset($this->Operation) ? $this->Operation : null;
    }
    /**
     * Set Operation value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $operation
     * @return \Mjarestad\DHL\LevtidOnline\StructType\Booking
     */
    public function setOperation($operation = null)
    {
        // validation for constraint: int
        if (!is_null($operation) && !(is_int($operation) || ctype_digit($operation))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($operation, true), gettype($operation)), __LINE__);
        }
        if (is_null($operation) || (is_array($operation) && empty($operation))) {
            unset($this->Operation);
        } else {
            $this->Operation = $operation;
        }
        return $this;
    }
    /**
     * Get PickupDate value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPickupDate()
    {
        return isset($this->PickupDate) ? $this->PickupDate : null;
    }
    /**
     * Set PickupDate value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $pickupDate
     * @return \Mjarestad\DHL\LevtidOnline\StructType\Booking
     */
    public function setPickupDate($pickupDate = null)
    {
        // validation for constraint: string
        if (!is_null($pickupDate) && !is_string($pickupDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pickupDate, true), gettype($pickupDate)), __LINE__);
        }
        if (is_null($pickupDate) || (is_array($pickupDate) && empty($pickupDate))) {
            unset($this->PickupDate);
        } else {
            $this->PickupDate = $pickupDate;
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
     * @return \Mjarestad\DHL\LevtidOnline\StructType\Booking
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
     * Get ResponseID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getResponseID()
    {
        return isset($this->ResponseID) ? $this->ResponseID : null;
    }
    /**
     * Set ResponseID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $responseID
     * @return \Mjarestad\DHL\LevtidOnline\StructType\Booking
     */
    public function setResponseID($responseID = null)
    {
        // validation for constraint: int
        if (!is_null($responseID) && !(is_int($responseID) || ctype_digit($responseID))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($responseID, true), gettype($responseID)), __LINE__);
        }
        if (is_null($responseID) || (is_array($responseID) && empty($responseID))) {
            unset($this->ResponseID);
        } else {
            $this->ResponseID = $responseID;
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
     * @return \Mjarestad\DHL\LevtidOnline\StructType\Booking
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
     * Get ResponseText value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getResponseText()
    {
        return isset($this->ResponseText) ? $this->ResponseText : null;
    }
    /**
     * Set ResponseText value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $responseText
     * @return \Mjarestad\DHL\LevtidOnline\StructType\Booking
     */
    public function setResponseText($responseText = null)
    {
        // validation for constraint: string
        if (!is_null($responseText) && !is_string($responseText)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($responseText, true), gettype($responseText)), __LINE__);
        }
        if (is_null($responseText) || (is_array($responseText) && empty($responseText))) {
            unset($this->ResponseText);
        } else {
            $this->ResponseText = $responseText;
        }
        return $this;
    }
    /**
     * Get ResponseTextLabel value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getResponseTextLabel()
    {
        return isset($this->ResponseTextLabel) ? $this->ResponseTextLabel : null;
    }
    /**
     * Set ResponseTextLabel value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $responseTextLabel
     * @return \Mjarestad\DHL\LevtidOnline\StructType\Booking
     */
    public function setResponseTextLabel($responseTextLabel = null)
    {
        // validation for constraint: string
        if (!is_null($responseTextLabel) && !is_string($responseTextLabel)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($responseTextLabel, true), gettype($responseTextLabel)), __LINE__);
        }
        if (is_null($responseTextLabel) || (is_array($responseTextLabel) && empty($responseTextLabel))) {
            unset($this->ResponseTextLabel);
        } else {
            $this->ResponseTextLabel = $responseTextLabel;
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
     * @return \Mjarestad\DHL\LevtidOnline\StructType\Booking
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
     * Get RouteID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getRouteID()
    {
        return isset($this->RouteID) ? $this->RouteID : null;
    }
    /**
     * Set RouteID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $routeID
     * @return \Mjarestad\DHL\LevtidOnline\StructType\Booking
     */
    public function setRouteID($routeID = null)
    {
        // validation for constraint: string
        if (!is_null($routeID) && !is_string($routeID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($routeID, true), gettype($routeID)), __LINE__);
        }
        if (is_null($routeID) || (is_array($routeID) && empty($routeID))) {
            unset($this->RouteID);
        } else {
            $this->RouteID = $routeID;
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
     * @return \Mjarestad\DHL\LevtidOnline\StructType\Booking
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
     * Get TypeOfDelivery value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getTypeOfDelivery()
    {
        return isset($this->TypeOfDelivery) ? $this->TypeOfDelivery : null;
    }
    /**
     * Set TypeOfDelivery value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $typeOfDelivery
     * @return \Mjarestad\DHL\LevtidOnline\StructType\Booking
     */
    public function setTypeOfDelivery($typeOfDelivery = null)
    {
        // validation for constraint: int
        if (!is_null($typeOfDelivery) && !(is_int($typeOfDelivery) || ctype_digit($typeOfDelivery))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($typeOfDelivery, true), gettype($typeOfDelivery)), __LINE__);
        }
        if (is_null($typeOfDelivery) || (is_array($typeOfDelivery) && empty($typeOfDelivery))) {
            unset($this->TypeOfDelivery);
        } else {
            $this->TypeOfDelivery = $typeOfDelivery;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mjarestad\DHL\LevtidOnline\StructType\Booking
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
