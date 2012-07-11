<?php
/**
 * Class file for XiEnergyTypeGetAvailableEnergyFutures
 * @date 08/07/2012
 */
/**
 * Class XiEnergyTypeGetAvailableEnergyFutures
 * @date 08/07/2012
 */
class XiEnergyTypeGetAvailableEnergyFutures extends XiEnergyWsdlClass
{
	/**
	 * The AsOfDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $AsOfDate;
	/**
	 * Constructor
	 * @param string AsOfDate
	 * @return XiEnergyTypeGetAvailableEnergyFutures
	 */
	public function __construct($_AsOfDate = null)
	{
		parent::__construct(array('AsOfDate'=>$_AsOfDate));
	}
	/**
	 * Set AsOfDate
	 * @param string AsOfDate
	 * @return string
	 */
	public function setAsOfDate($_AsOfDate)
	{
		return ($this->AsOfDate = $_AsOfDate);
	}
	/**
	 * Get AsOfDate
	 * @return string
	 */
	public function getAsOfDate()
	{
		return $this->AsOfDate;
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