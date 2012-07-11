<?php
/**
 * Class file for OvhTypeMyArrayOfTelephonyPhonebookGroupStructType
 * @date 02/07/2012
 */
/**
 * Class OvhTypeMyArrayOfTelephonyPhonebookGroupStructType
 * @date 02/07/2012
 */
class OvhTypeMyArrayOfTelephonyPhonebookGroupStructType extends OvhWsdlClass
{
	/**
	 * The item
	 * @var OvhTypeTelephonyPhonebookGroupStruct
	 */
	public $item;
	/**
	 * Constructor
	 * @param OvhTypeTelephonyPhonebookGroupStruct item
	 * @return OvhTypeMyArrayOfTelephonyPhonebookGroupStructType
	 */
	public function __construct($_item = null)
	{
		parent::__construct(array('item'=>$_item));
	}
	/**
	 * Set item
	 * @param telephonyPhonebookGroupStruct item
	 * @return telephonyPhonebookGroupStruct
	 */
	public function setItem($_item)
	{
		return ($this->item = $_item);
	}
	/**
	 * Get item
	 * @return OvhTypetelephonyPhonebookGroupStruct
	 */
	public function getItem()
	{
		return $this->item;
	}
	/**
	 * Returns the current element
	 * @see OvhWsdlClass::current()
	 * @return OvhTypeTelephonyPhonebookGroupStruct
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see OvhWsdlClass::item()
	 * @param int
	 * @return OvhTypeTelephonyPhonebookGroupStruct
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see OvhWsdlClass::first()
	 * @return OvhTypeTelephonyPhonebookGroupStruct
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see OvhWsdlClass::last()
	 * @return OvhTypeTelephonyPhonebookGroupStruct
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see OvhWsdlClass::offsetGet()
	 * @param int
	 * @return OvhTypeTelephonyPhonebookGroupStruct
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'item'
	 */
	public function getAttributeName()
	{
		return 'item';
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
?>