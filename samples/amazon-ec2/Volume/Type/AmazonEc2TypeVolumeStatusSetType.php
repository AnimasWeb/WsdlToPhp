<?php
/**
 * Class file for AmazonEc2TypeVolumeStatusSetType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeVolumeStatusSetType
 * @date 10/07/2012
 */
class AmazonEc2TypeVolumeStatusSetType extends AmazonEc2WsdlClass
{
	/**
	 * The item
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var AmazonEc2TypeVolumeStatusItemType
	 */
	public $item;
	/**
	 * Constructor
	 * @param AmazonEc2TypeVolumeStatusItemType item
	 * @return AmazonEc2TypeVolumeStatusSetType
	 */
	public function __construct($_item = null)
	{
		parent::__construct(array('item'=>$_item));
	}
	/**
	 * Set item
	 * @param VolumeStatusItemType item
	 * @return VolumeStatusItemType
	 */
	public function setItem($_item)
	{
		return ($this->item = $_item);
	}
	/**
	 * Get item
	 * @return AmazonEc2TypeVolumeStatusItemType
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