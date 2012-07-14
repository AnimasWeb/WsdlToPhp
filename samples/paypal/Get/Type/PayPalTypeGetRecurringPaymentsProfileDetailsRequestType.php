<?php
/**
 * Class file for PayPalTypeGetRecurringPaymentsProfileDetailsRequestType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeGetRecurringPaymentsProfileDetailsRequestType
 * @date 14/07/2012
 */
class PayPalTypeGetRecurringPaymentsProfileDetailsRequestType extends PayPalTypeAbstractRequestType
{
	/**
	 * The ProfileID
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * 	- documentation : 
	 * @var string
	 */
	public $ProfileID;
	/**
	 * Constructor
	 * @param string ProfileID
	 * @return PayPalTypeGetRecurringPaymentsProfileDetailsRequestType
	 */
	public function __construct($_ProfileID)
	{
		PayPalWsdlClass::__construct(array('ProfileID'=>$_ProfileID));
	}
	/**
	 * Set ProfileID
	 * @param string ProfileID
	 * @return string
	 */
	public function setProfileID($_ProfileID)
	{
		return ($this->ProfileID = $_ProfileID);
	}
	/**
	 * Get ProfileID
	 * @return string
	 */
	public function getProfileID()
	{
		return $this->ProfileID;
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