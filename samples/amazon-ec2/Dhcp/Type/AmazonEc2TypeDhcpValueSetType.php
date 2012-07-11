<?php
/**
 * Class file for AmazonEc2TypeDhcpValueSetType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeDhcpValueSetType
 * @date 10/07/2012
 */
class AmazonEc2TypeDhcpValueSetType extends AmazonEc2WsdlClass
{
	/**
	 * The item
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var AmazonEc2TypeDhcpValueType
	 */
	public $item;
	/**
	 * Constructor
	 * @param AmazonEc2TypeDhcpValueType item
	 * @return AmazonEc2TypeDhcpValueSetType
	 */
	public function __construct($_item = null)
	{
		parent::__construct(array('item'=>$_item));
	}
	/**
	 * Set item
	 * @param DhcpValueType item
	 * @return DhcpValueType
	 */
	public function setItem($_item)
	{
		return ($this->item = $_item);
	}
	/**
	 * Get item
	 * @return AmazonEc2TypeDhcpValueType
	 */
	public function getItem()
	{
		return $this->item;
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