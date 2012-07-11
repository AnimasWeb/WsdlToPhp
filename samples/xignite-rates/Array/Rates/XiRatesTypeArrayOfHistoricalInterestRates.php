<?php
/**
 * Class file for XiRatesTypeArrayOfHistoricalInterestRates
 * @date 08/07/2012
 */
/**
 * Class XiRatesTypeArrayOfHistoricalInterestRates
 * @date 08/07/2012
 */
class XiRatesTypeArrayOfHistoricalInterestRates extends XiRatesWsdlClass
{
	/**
	 * The HistoricalInterestRates
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiRatesTypeHistoricalInterestRates
	 */
	public $HistoricalInterestRates;
	/**
	 * Constructor
	 * @param XiRatesTypeHistoricalInterestRates HistoricalInterestRates
	 * @return XiRatesTypeArrayOfHistoricalInterestRates
	 */
	public function __construct($_HistoricalInterestRates = null)
	{
		parent::__construct(array('HistoricalInterestRates'=>$_HistoricalInterestRates));
	}
	/**
	 * Set HistoricalInterestRates
	 * @param HistoricalInterestRates HistoricalInterestRates
	 * @return HistoricalInterestRates
	 */
	public function setHistoricalInterestRates($_HistoricalInterestRates)
	{
		return ($this->HistoricalInterestRates = $_HistoricalInterestRates);
	}
	/**
	 * Get HistoricalInterestRates
	 * @return XiRatesTypeHistoricalInterestRates
	 */
	public function getHistoricalInterestRates()
	{
		return $this->HistoricalInterestRates;
	}
	/**
	 * Returns the current element
	 * @see XiRatesWsdlClass::current()
	 * @return XiRatesTypeHistoricalInterestRates
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiRatesWsdlClass::item()
	 * @param int
	 * @return XiRatesTypeHistoricalInterestRates
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiRatesWsdlClass::first()
	 * @return XiRatesTypeHistoricalInterestRates
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiRatesWsdlClass::last()
	 * @return XiRatesTypeHistoricalInterestRates
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiRatesWsdlClass::offsetGet()
	 * @param int
	 * @return XiRatesTypeHistoricalInterestRates
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'HistoricalInterestRates'
	 */
	public function getAttributeName()
	{
		return 'HistoricalInterestRates';
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