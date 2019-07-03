<?php

namespace Mjarestad\DHL\LevtidOnline\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfTimeTable ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfTimeTable
 * @subpackage Arrays
 */
class ArrayOfTimeTable extends AbstractStructArrayBase
{
    /**
     * The TimeTable
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Mjarestad\DHL\LevtidOnline\StructType\TimeTable[]
     */
    public $TimeTable;
    /**
     * Constructor method for ArrayOfTimeTable
     * @uses ArrayOfTimeTable::setTimeTable()
     * @param \Mjarestad\DHL\LevtidOnline\StructType\TimeTable[] $timeTable
     */
    public function __construct(array $timeTable = array())
    {
        $this
            ->setTimeTable($timeTable);
    }
    /**
     * Get TimeTable value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mjarestad\DHL\LevtidOnline\StructType\TimeTable[]|null
     */
    public function getTimeTable()
    {
        return isset($this->TimeTable) ? $this->TimeTable : null;
    }
    /**
     * This method is responsible for validating the values passed to the setTimeTable method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTimeTable method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTimeTableForArrayConstraintsFromSetTimeTable(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfTimeTableTimeTableItem) {
            // validation for constraint: itemType
            if (!$arrayOfTimeTableTimeTableItem instanceof \Mjarestad\DHL\LevtidOnline\StructType\TimeTable) {
                $invalidValues[] = is_object($arrayOfTimeTableTimeTableItem) ? get_class($arrayOfTimeTableTimeTableItem) : sprintf('%s(%s)', gettype($arrayOfTimeTableTimeTableItem), var_export($arrayOfTimeTableTimeTableItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The TimeTable property can only contain items of type \Mjarestad\DHL\LevtidOnline\StructType\TimeTable, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set TimeTable value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Mjarestad\DHL\LevtidOnline\StructType\TimeTable[] $timeTable
     * @return \Mjarestad\DHL\LevtidOnline\ArrayType\ArrayOfTimeTable
     */
    public function setTimeTable(array $timeTable = array())
    {
        // validation for constraint: array
        if ('' !== ($timeTableArrayErrorMessage = self::validateTimeTableForArrayConstraintsFromSetTimeTable($timeTable))) {
            throw new \InvalidArgumentException($timeTableArrayErrorMessage, __LINE__);
        }
        if (is_null($timeTable) || (is_array($timeTable) && empty($timeTable))) {
            unset($this->TimeTable);
        } else {
            $this->TimeTable = $timeTable;
        }
        return $this;
    }
    /**
     * Add item to TimeTable value
     * @throws \InvalidArgumentException
     * @param \Mjarestad\DHL\LevtidOnline\StructType\TimeTable $item
     * @return \Mjarestad\DHL\LevtidOnline\ArrayType\ArrayOfTimeTable
     */
    public function addToTimeTable(\Mjarestad\DHL\LevtidOnline\StructType\TimeTable $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Mjarestad\DHL\LevtidOnline\StructType\TimeTable) {
            throw new \InvalidArgumentException(sprintf('The TimeTable property can only contain items of type \Mjarestad\DHL\LevtidOnline\StructType\TimeTable, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->TimeTable[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Mjarestad\DHL\LevtidOnline\StructType\TimeTable|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Mjarestad\DHL\LevtidOnline\StructType\TimeTable|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Mjarestad\DHL\LevtidOnline\StructType\TimeTable|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Mjarestad\DHL\LevtidOnline\StructType\TimeTable|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Mjarestad\DHL\LevtidOnline\StructType\TimeTable|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string TimeTable
     */
    public function getAttributeName()
    {
        return 'TimeTable';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Mjarestad\DHL\LevtidOnline\ArrayType\ArrayOfTimeTable
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
