<?php
/**
 * Class file for AmazonEc2TypeInstanceStatusSetType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeInstanceStatusSetType
 * @date 10/07/2012
 */
class AmazonEc2TypeInstanceStatusSetType extends AmazonEc2WsdlClass
{
	/**
	 * The item
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var AmazonEc2TypeInstanceStatusItemType
	 */
	public $item;
	/**
	 * Constructor
	 * @param AmazonEc2TypeInstanceStatusItemType item
	 * @return AmazonEc2TypeInstanceStatusSetType
	 */
	public function __construct($_item = null)
	{
		parent::__construct(array('item'=>$_item));
	}
	/**
	 * Set item
	 * @param InstanceStatusItemType item
	 * @return InstanceStatusItemType
	 */
	public function setItem($_item)
	{
		return ($this->item = $_item);
	}
	/**
	 * Get item
	 * @return AmazonEc2TypeInstanceStatusItemType
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