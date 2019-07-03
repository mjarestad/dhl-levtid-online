<?php

namespace Mjarestad\DHL\LevtidOnline\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetTimeTableOnline StructType
 * @subpackage Structs
 */
class GetTimeTableOnline extends AbstractStructBase
{
    /**
     * The user
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $user;
    /**
     * The password
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $password;
    /**
     * The custormerId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $custormerId;
    /**
     * The type
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $type;
    /**
     * The requestType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $requestType;
    /**
     * The createTimeStamp
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $createTimeStamp;
    /**
     * The pickupCountryCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $pickupCountryCode;
    /**
     * The pickupPostCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $pickupPostCode;
    /**
     * The arrivingTerminal
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $arrivingTerminal;
    /**
     * The deliveryCountryCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $deliveryCountryCode;
    /**
     * The deliveryPostCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $deliveryPostCode;
    /**
     * The earliestSentDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $earliestSentDate;
    /**
     * The noOfDays
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $noOfDays;
    /**
     * The verkligvikt
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $verkligvikt;
    /**
     * The volym
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $volym;
    /**
     * The pallplatser
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $pallplatser;
    /**
     * The flm
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $flm;
    /**
     * Constructor method for GetTimeTableOnline
     * @uses GetTimeTableOnline::setUser()
     * @uses GetTimeTableOnline::setPassword()
     * @uses GetTimeTableOnline::setCustormerId()
     * @uses GetTimeTableOnline::setType()
     * @uses GetTimeTableOnline::setRequestType()
     * @uses GetTimeTableOnline::setCreateTimeStamp()
     * @uses GetTimeTableOnline::setPickupCountryCode()
     * @uses GetTimeTableOnline::setPickupPostCode()
     * @uses GetTimeTableOnline::setArrivingTerminal()
     * @uses GetTimeTableOnline::setDeliveryCountryCode()
     * @uses GetTimeTableOnline::setDeliveryPostCode()
     * @uses GetTimeTableOnline::setEarliestSentDate()
     * @uses GetTimeTableOnline::setNoOfDays()
     * @uses GetTimeTableOnline::setVerkligvikt()
     * @uses GetTimeTableOnline::setVolym()
     * @uses GetTimeTableOnline::setPallplatser()
     * @uses GetTimeTableOnline::setFlm()
     * @param string $user
     * @param string $password
     * @param string $custormerId
     * @param int $type
     * @param int $requestType
     * @param string $createTimeStamp
     * @param string $pickupCountryCode
     * @param int $pickupPostCode
     * @param int $arrivingTerminal
     * @param string $deliveryCountryCode
     * @param int $deliveryPostCode
     * @param string $earliestSentDate
     * @param int $noOfDays
     * @param float $verkligvikt
     * @param float $volym
     * @param int $pallplatser
     * @param float $flm
     */
    public function __construct($user = null, $password = null, $custormerId = null, $type = null, $requestType = null, $createTimeStamp = null, $pickupCountryCode = null, $pickupPostCode = null, $arrivingTerminal = null, $deliveryCountryCode = null, $deliveryPostCode = null, $earliestSentDate = null, $noOfDays = null, $verkligvikt = null, $volym = null, $pallplatser = null, $flm = null)
    {
        $this
            ->setUser($user)
            ->setPassword($password)
            ->setCustormerId($custormerId)
            ->setType($type)
            ->setRequestType($requestType)
            ->setCreateTimeStamp($createTimeStamp)
            ->setPickupCountryCode($pickupCountryCode)
            ->setPickupPostCode($pickupPostCode)
            ->setArrivingTerminal($arrivingTerminal)
            ->setDeliveryCountryCode($deliveryCountryCode)
            ->setDeliveryPostCode($deliveryPostCode)
            ->setEarliestSentDate($earliestSentDate)
            ->setNoOfDays($noOfDays)
            ->setVerkligvikt($verkligvikt)
            ->setVolym($volym)
            ->setPallplatser($pallplatser)
            ->setFlm($flm);
    }
    /**
     * Get user value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getUser()
    {
        return isset($this->user) ? $this->user : null;
    }
    /**
     * Set user value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $user
     * @return \Mjarestad\DHL\LevtidOnline\StructType\GetTimeTableOnline
     */
    public function setUser($user = null)
    {
        // validation for constraint: string
        if (!is_null($user) && !is_string($user)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($user, true), gettype($user)), __LINE__);
        }
        if (is_null($user) || (is_array($user) && empty($user))) {
            unset($this->user);
        } else {
            $this->user = $user;
        }
        return $this;
    }
    /**
     * Get password value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPassword()
    {
        return isset($this->password) ? $this->password : null;
    }
    /**
     * Set password value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $password
     * @return \Mjarestad\DHL\LevtidOnline\StructType\GetTimeTableOnline
     */
    public function setPassword($password = null)
    {
        // validation for constraint: string
        if (!is_null($password) && !is_string($password)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($password, true), gettype($password)), __LINE__);
        }
        if (is_null($password) || (is_array($password) && empty($password))) {
            unset($this->password);
        } else {
            $this->password = $password;
        }
        return $this;
    }
    /**
     * Get custormerId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCustormerId()
    {
        return isset($this->custormerId) ? $this->custormerId : null;
    }
    /**
     * Set custormerId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $custormerId
     * @return \Mjarestad\DHL\LevtidOnline\StructType\GetTimeTableOnline
     */
    public function setCustormerId($custormerId = null)
    {
        // validation for constraint: string
        if (!is_null($custormerId) && !is_string($custormerId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($custormerId, true), gettype($custormerId)), __LINE__);
        }
        if (is_null($custormerId) || (is_array($custormerId) && empty($custormerId))) {
            unset($this->custormerId);
        } else {
            $this->custormerId = $custormerId;
        }
        return $this;
    }
    /**
     * Get type value
     * @return int|null
     */
    public function getType()
    {
        return $this->type;
    }
    /**
     * Set type value
     * @param int $type
     * @return \Mjarestad\DHL\LevtidOnline\StructType\GetTimeTableOnline
     */
    public function setType($type = null)
    {
        // validation for constraint: int
        if (!is_null($type) && !(is_int($type) || ctype_digit($type))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($type, true), gettype($type)), __LINE__);
        }
        $this->type = $type;
        return $this;
    }
    /**
     * Get requestType value
     * @return int|null
     */
    public function getRequestType()
    {
        return $this->requestType;
    }
    /**
     * Set requestType value
     * @param int $requestType
     * @return \Mjarestad\DHL\LevtidOnline\StructType\GetTimeTableOnline
     */
    public function setRequestType($requestType = null)
    {
        // validation for constraint: int
        if (!is_null($requestType) && !(is_int($requestType) || ctype_digit($requestType))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($requestType, true), gettype($requestType)), __LINE__);
        }
        $this->requestType = $requestType;
        return $this;
    }
    /**
     * Get createTimeStamp value
     * @return string|null
     */
    public function getCreateTimeStamp()
    {
        return $this->createTimeStamp;
    }
    /**
     * Set createTimeStamp value
     * @param string $createTimeStamp
     * @return \Mjarestad\DHL\LevtidOnline\StructType\GetTimeTableOnline
     */
    public function setCreateTimeStamp($createTimeStamp = null)
    {
        // validation for constraint: string
        if (!is_null($createTimeStamp) && !is_string($createTimeStamp)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($createTimeStamp, true), gettype($createTimeStamp)), __LINE__);
        }
        $this->createTimeStamp = $createTimeStamp;
        return $this;
    }
    /**
     * Get pickupCountryCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPickupCountryCode()
    {
        return isset($this->pickupCountryCode) ? $this->pickupCountryCode : null;
    }
    /**
     * Set pickupCountryCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $pickupCountryCode
     * @return \Mjarestad\DHL\LevtidOnline\StructType\GetTimeTableOnline
     */
    public function setPickupCountryCode($pickupCountryCode = null)
    {
        // validation for constraint: string
        if (!is_null($pickupCountryCode) && !is_string($pickupCountryCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pickupCountryCode, true), gettype($pickupCountryCode)), __LINE__);
        }
        if (is_null($pickupCountryCode) || (is_array($pickupCountryCode) && empty($pickupCountryCode))) {
            unset($this->pickupCountryCode);
        } else {
            $this->pickupCountryCode = $pickupCountryCode;
        }
        return $this;
    }
    /**
     * Get pickupPostCode value
     * @return int|null
     */
    public function getPickupPostCode()
    {
        return $this->pickupPostCode;
    }
    /**
     * Set pickupPostCode value
     * @param int $pickupPostCode
     * @return \Mjarestad\DHL\LevtidOnline\StructType\GetTimeTableOnline
     */
    public function setPickupPostCode($pickupPostCode = null)
    {
        // validation for constraint: int
        if (!is_null($pickupPostCode) && !(is_int($pickupPostCode) || ctype_digit($pickupPostCode))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($pickupPostCode, true), gettype($pickupPostCode)), __LINE__);
        }
        $this->pickupPostCode = $pickupPostCode;
        return $this;
    }
    /**
     * Get arrivingTerminal value
     * @return int|null
     */
    public function getArrivingTerminal()
    {
        return $this->arrivingTerminal;
    }
    /**
     * Set arrivingTerminal value
     * @param int $arrivingTerminal
     * @return \Mjarestad\DHL\LevtidOnline\StructType\GetTimeTableOnline
     */
    public function setArrivingTerminal($arrivingTerminal = null)
    {
        // validation for constraint: int
        if (!is_null($arrivingTerminal) && !(is_int($arrivingTerminal) || ctype_digit($arrivingTerminal))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($arrivingTerminal, true), gettype($arrivingTerminal)), __LINE__);
        }
        $this->arrivingTerminal = $arrivingTerminal;
        return $this;
    }
    /**
     * Get deliveryCountryCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDeliveryCountryCode()
    {
        return isset($this->deliveryCountryCode) ? $this->deliveryCountryCode : null;
    }
    /**
     * Set deliveryCountryCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $deliveryCountryCode
     * @return \Mjarestad\DHL\LevtidOnline\StructType\GetTimeTableOnline
     */
    public function setDeliveryCountryCode($deliveryCountryCode = null)
    {
        // validation for constraint: string
        if (!is_null($deliveryCountryCode) && !is_string($deliveryCountryCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($deliveryCountryCode, true), gettype($deliveryCountryCode)), __LINE__);
        }
        if (is_null($deliveryCountryCode) || (is_array($deliveryCountryCode) && empty($deliveryCountryCode))) {
            unset($this->deliveryCountryCode);
        } else {
            $this->deliveryCountryCode = $deliveryCountryCode;
        }
        return $this;
    }
    /**
     * Get deliveryPostCode value
     * @return int|null
     */
    public function getDeliveryPostCode()
    {
        return $this->deliveryPostCode;
    }
    /**
     * Set deliveryPostCode value
     * @param int $deliveryPostCode
     * @return \Mjarestad\DHL\LevtidOnline\StructType\GetTimeTableOnline
     */
    public function setDeliveryPostCode($deliveryPostCode = null)
    {
        // validation for constraint: int
        if (!is_null($deliveryPostCode) && !(is_int($deliveryPostCode) || ctype_digit($deliveryPostCode))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($deliveryPostCode, true), gettype($deliveryPostCode)), __LINE__);
        }
        $this->deliveryPostCode = $deliveryPostCode;
        return $this;
    }
    /**
     * Get earliestSentDate value
     * @return string|null
     */
    public function getEarliestSentDate()
    {
        return $this->earliestSentDate;
    }
    /**
     * Set earliestSentDate value
     * @param string $earliestSentDate
     * @return \Mjarestad\DHL\LevtidOnline\StructType\GetTimeTableOnline
     */
    public function setEarliestSentDate($earliestSentDate = null)
    {
        // validation for constraint: string
        if (!is_null($earliestSentDate) && !is_string($earliestSentDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($earliestSentDate, true), gettype($earliestSentDate)), __LINE__);
        }
        $this->earliestSentDate = $earliestSentDate;
        return $this;
    }
    /**
     * Get noOfDays value
     * @return int|null
     */
    public function getNoOfDays()
    {
        return $this->noOfDays;
    }
    /**
     * Set noOfDays value
     * @param int $noOfDays
     * @return \Mjarestad\DHL\LevtidOnline\StructType\GetTimeTableOnline
     */
    public function setNoOfDays($noOfDays = null)
    {
        // validation for constraint: int
        if (!is_null($noOfDays) && !(is_int($noOfDays) || ctype_digit($noOfDays))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($noOfDays, true), gettype($noOfDays)), __LINE__);
        }
        $this->noOfDays = $noOfDays;
        return $this;
    }
    /**
     * Get verkligvikt value
     * @return float|null
     */
    public function getVerkligvikt()
    {
        return $this->verkligvikt;
    }
    /**
     * Set verkligvikt value
     * @param float $verkligvikt
     * @return \Mjarestad\DHL\LevtidOnline\StructType\GetTimeTableOnline
     */
    public function setVerkligvikt($verkligvikt = null)
    {
        // validation for constraint: float
        if (!is_null($verkligvikt) && !(is_float($verkligvikt) || is_numeric($verkligvikt))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($verkligvikt, true), gettype($verkligvikt)), __LINE__);
        }
        $this->verkligvikt = $verkligvikt;
        return $this;
    }
    /**
     * Get volym value
     * @return float|null
     */
    public function getVolym()
    {
        return $this->volym;
    }
    /**
     * Set volym value
     * @param float $volym
     * @return \Mjarestad\DHL\LevtidOnline\StructType\GetTimeTableOnline
     */
    public function setVolym($volym = null)
    {
        // validation for constraint: float
        if (!is_null($volym) && !(is_float($volym) || is_numeric($volym))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($volym, true), gettype($volym)), __LINE__);
        }
        $this->volym = $volym;
        return $this;
    }
    /**
     * Get pallplatser value
     * @return int|null
     */
    public function getPallplatser()
    {
        return $this->pallplatser;
    }
    /**
     * Set pallplatser value
     * @param int $pallplatser
     * @return \Mjarestad\DHL\LevtidOnline\StructType\GetTimeTableOnline
     */
    public function setPallplatser($pallplatser = null)
    {
        // validation for constraint: int
        if (!is_null($pallplatser) && !(is_int($pallplatser) || ctype_digit($pallplatser))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($pallplatser, true), gettype($pallplatser)), __LINE__);
        }
        $this->pallplatser = $pallplatser;
        return $this;
    }
    /**
     * Get flm value
     * @return float|null
     */
    public function getFlm()
    {
        return $this->flm;
    }
    /**
     * Set flm value
     * @param float $flm
     * @return \Mjarestad\DHL\LevtidOnline\StructType\GetTimeTableOnline
     */
    public function setFlm($flm = null)
    {
        // validation for constraint: float
        if (!is_null($flm) && !(is_float($flm) || is_numeric($flm))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($flm, true), gettype($flm)), __LINE__);
        }
        $this->flm = $flm;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mjarestad\DHL\LevtidOnline\StructType\GetTimeTableOnline
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
