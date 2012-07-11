<?php
/**
 * Class file for XiRatesTypeGetLatestRate
 * @date 08/07/2012
 */
/**
 * Class XiRatesTypeGetLatestRate
 * @date 08/07/2012
 */
class XiRatesTypeGetLatestRate extends XiRatesWsdlClass
{
	/**
	 * The RateType
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiRatesTypeRateTypes
	 */
	public $RateType;
	/**
	 * Constructor
	 * @param XiRatesTypeRateTypes RateType
	 * @return XiRatesTypeGetLatestRate
	 */
	public function __construct($_RateType)
	{
		parent::__construct(array('RateType'=>$_RateType));
	}
	/**
	 * Set RateType
	 * @param RateTypes RateType
	 * @return RateTypes
	 */
	public function setRateType($_RateType)
	{
		return ($this->RateType = XiRatesTypeRateTypes::valueIsValid($_RateType)?$_RateType:null);
	}
	/**
	 * Get RateType
	 * @return XiRatesTypeRateTypes
	 */
	public function getRateType()
	{
		return $this->RateType;
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