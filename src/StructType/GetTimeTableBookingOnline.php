<?php

namespace Mjarestad\DHL\LevtidOnline\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetTimeTableBookingOnline StructType
 * @subpackage Structs
 */
class GetTimeTableBookingOnline extends AbstractStructBase
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
     * The getTimeTableOnlineID
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $getTimeTableOnlineID;
    /**
     * The operation
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $operation;
    /**
     * The responseID
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $responseID;
    /**
     * Constructor method for GetTimeTableBookingOnline
     * @uses GetTimeTableBookingOnline::setUser()
     * @uses GetTimeTableBookingOnline::setPassword()
     * @uses GetTimeTableBookingOnline::setCustormerId()
     * @uses GetTimeTableBookingOnline::setType()
     * @uses GetTimeTableBookingOnline::setRequestType()
     * @uses GetTimeTableBookingOnline::setCreateTimeStamp()
     * @uses GetTimeTableBookingOnline::setGetTimeTableOnlineID()
     * @uses GetTimeTableBookingOnline::setOperation()
     * @uses GetTimeTableBookingOnline::setResponseID()
     * @param string $user
     * @param string $password
     * @param string $custormerId
     * @param int $type
     * @param int $requestType
     * @param string $createTimeStamp
     * @param int $getTimeTableOnlineID
     * @param int $operation
     * @param int $responseID
     */
    public function __construct($user = null, $password = null, $custormerId = null, $type = null, $requestType = null, $createTimeStamp = null, $getTimeTableOnlineID = null, $operation = null, $responseID = null)
    {
        $this
            ->setUser($user)
            ->setPassword($password)
            ->setCustormerId($custormerId)
            ->setType($type)
            ->setRequestType($requestType)
            ->setCreateTimeStamp($createTimeStamp)
            ->setGetTimeTableOnlineID($getTimeTableOnlineID)
            ->setOperation($operation)
            ->setResponseID($responseID);
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
     * @return \Mjarestad\DHL\LevtidOnline\StructType\GetTimeTableBookingOnline
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
     * @return \Mjarestad\DHL\LevtidOnline\StructType\GetTimeTableBookingOnline
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
     * @return \Mjarestad\DHL\LevtidOnline\StructType\GetTimeTableBookingOnline
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
     * @return \Mjarestad\DHL\LevtidOnline\StructType\GetTimeTableBookingOnline
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
     * @return \Mjarestad\DHL\LevtidOnline\StructType\GetTimeTableBookingOnline
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
     * @return \Mjarestad\DHL\LevtidOnline\StructType\GetTimeTableBookingOnline
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
     * Get getTimeTableOnlineID value
     * @return int|null
     */
    public function getGetTimeTableOnlineID()
    {
        return $this->getTimeTableOnlineID;
    }
    /**
     * Set getTimeTableOnlineID value
     * @param int $getTimeTableOnlineID
     * @return \Mjarestad\DHL\LevtidOnline\StructType\GetTimeTableBookingOnline
     */
    public function setGetTimeTableOnlineID($getTimeTableOnlineID = null)
    {
        // validation for constraint: int
        if (!is_null($getTimeTableOnlineID) && !(is_int($getTimeTableOnlineID) || ctype_digit($getTimeTableOnlineID))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($getTimeTableOnlineID, true), gettype($getTimeTableOnlineID)), __LINE__);
        }
        $this->getTimeTableOnlineID = $getTimeTableOnlineID;
        return $this;
    }
    /**
     * Get operation value
     * @return int|null
     */
    public function getOperation()
    {
        return $this->operation;
    }
    /**
     * Set operation value
     * @param int $operation
     * @return \Mjarestad\DHL\LevtidOnline\StructType\GetTimeTableBookingOnline
     */
    public function setOperation($operation = null)
    {
        // validation for constraint: int
        if (!is_null($operation) && !(is_int($operation) || ctype_digit($operation))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($operation, true), gettype($operation)), __LINE__);
        }
        $this->operation = $operation;
        return $this;
    }
    /**
     * Get responseID value
     * @return int|null
     */
    public function getResponseID()
    {
        return $this->responseID;
    }
    /**
     * Set responseID value
     * @param int $responseID
     * @return \Mjarestad\DHL\LevtidOnline\StructType\GetTimeTableBookingOnline
     */
    public function setResponseID($responseID = null)
    {
        // validation for constraint: int
        if (!is_null($responseID) && !(is_int($responseID) || ctype_digit($responseID))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($responseID, true), gettype($responseID)), __LINE__);
        }
        $this->responseID = $responseID;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mjarestad\DHL\LevtidOnline\StructType\GetTimeTableBookingOnline
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
