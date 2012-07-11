<?php
/**
 * Class file for AmazonEc2TypeReservationSetType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeReservationSetType
 * @date 10/07/2012
 */
class AmazonEc2TypeReservationSetType extends AmazonEc2WsdlClass
{
	/**
	 * The item
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var AmazonEc2TypeReservationInfoType
	 */
	public $item;
	/**
	 * Constructor
	 * @param AmazonEc2TypeReservationInfoType item
	 * @return AmazonEc2TypeReservationSetType
	 */
	public function __construct($_item = null)
	{
		parent::__construct(array('item'=>$_item));
	}
	/**
	 * Set item
	 * @param ReservationInfoType item
	 * @return ReservationInfoType
	 */
	public function setItem($_item)
	{
		return ($this->item = $_item);
	}
	/**
	 * Get item
	 * @return AmazonEc2TypeReservationInfoType
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