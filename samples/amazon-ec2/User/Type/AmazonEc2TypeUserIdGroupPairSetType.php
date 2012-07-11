<?php
/**
 * Class file for AmazonEc2TypeUserIdGroupPairSetType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeUserIdGroupPairSetType
 * @date 10/07/2012
 */
class AmazonEc2TypeUserIdGroupPairSetType extends AmazonEc2WsdlClass
{
	/**
	 * The item
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var AmazonEc2TypeUserIdGroupPairType
	 */
	public $item;
	/**
	 * Constructor
	 * @param AmazonEc2TypeUserIdGroupPairType item
	 * @return AmazonEc2TypeUserIdGroupPairSetType
	 */
	public function __construct($_item = null)
	{
		parent::__construct(array('item'=>$_item));
	}
	/**
	 * Set item
	 * @param UserIdGroupPairType item
	 * @return UserIdGroupPairType
	 */
	public function setItem($_item)
	{
		return ($this->item = $_item);
	}
	/**
	 * Get item
	 * @return AmazonEc2TypeUserIdGroupPairType
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