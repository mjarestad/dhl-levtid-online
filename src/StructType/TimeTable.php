<?php

namespace Mjarestad\DHL\LevtidOnline\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TimeTable StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:TimeTable
 * @subpackage Structs
 */
class TimeTable extends AbstractStructBase
{
    /**
     * The DeliveryDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $DeliveryDate;
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
     * The PickupDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $PickupDate;
    /**
     * The ResponseID
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int
     */
    public $ResponseID;
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
     * The TypeOfDelivery
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int
     */
    public $TypeOfDelivery;
    /**
     * Constructor method for TimeTable
     * @uses TimeTable::setDeliveryDate()
     * @uses TimeTable::setDeliveryTimeFrom()
     * @uses TimeTable::setDeliveryTimeTo()
     * @uses TimeTable::setGetTimeTableOnlineID()
     * @uses TimeTable::setPickupDate()
     * @uses TimeTable::setResponseID()
     * @uses TimeTable::setResponseText()
     * @uses TimeTable::setResponseTextLabel()
     * @uses TimeTable::setTypeOfDelivery()
     * @param string $deliveryDate
     * @param string $deliveryTimeFrom
     * @param string $deliveryTimeTo
     * @param int $getTimeTableOnlineID
     * @param string $pickupDate
     * @param int $responseID
     * @param string $responseText
     * @param string $responseTextLabel
     * @param int $typeOfDelivery
     */
    public function __construct($deliveryDate = null, $deliveryTimeFrom = null, $deliveryTimeTo = null, $getTimeTableOnlineID = null, $pickupDate = null, $responseID = null, $responseText = null, $responseTextLabel = null, $typeOfDelivery = null)
    {
        $this
            ->setDeliveryDate($deliveryDate)
            ->setDeliveryTimeFrom($deliveryTimeFrom)
            ->setDeliveryTimeTo($deliveryTimeTo)
            ->setGetTimeTableOnlineID($getTimeTableOnlineID)
            ->setPickupDate($pickupDate)
            ->setResponseID($responseID)
            ->setResponseText($responseText)
            ->setResponseTextLabel($responseTextLabel)
            ->setTypeOfDelivery($typeOfDelivery);
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
     * @return \Mjarestad\DHL\LevtidOnline\StructType\TimeTable
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
     * @return \Mjarestad\DHL\LevtidOnline\StructType\TimeTable
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
     * @return \Mjarestad\DHL\LevtidOnline\StructType\TimeTable
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
     * @return \Mjarestad\DHL\LevtidOnline\StructType\TimeTable
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
     * @return \Mjarestad\DHL\LevtidOnline\StructType\TimeTable
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
     * @return \Mjarestad\DHL\LevtidOnline\StructType\TimeTable
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
     * @return \Mjarestad\DHL\LevtidOnline\StructType\TimeTable
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
     * @return \Mjarestad\DHL\LevtidOnline\StructType\TimeTable
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
     * @return \Mjarestad\DHL\LevtidOnline\StructType\TimeTable
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
     * @return \Mjarestad\DHL\LevtidOnline\StructType\TimeTable
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
