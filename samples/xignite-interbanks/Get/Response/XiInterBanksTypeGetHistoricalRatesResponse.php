<?php
/**
 * Class file for XiInterBanksTypeGetHistoricalRatesResponse
 * @date 08/07/2012
 */
/**
 * Class XiInterBanksTypeGetHistoricalRatesResponse
 * @date 08/07/2012
 */
class XiInterBanksTypeGetHistoricalRatesResponse extends XiInterBanksWsdlClass
{
	/**
	 * The GetHistoricalRatesResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiInterBanksTypeHistoricalInterestRates
	 */
	public $GetHistoricalRatesResult;
	/**
	 * Constructor
	 * @param XiInterBanksTypeHistoricalInterestRates GetHistoricalRatesResult
	 * @return XiInterBanksTypeGetHistoricalRatesResponse
	 */
	public function __construct($_GetHistoricalRatesResult = null)
	{
		parent::__construct(array('GetHistoricalRatesResult'=>$_GetHistoricalRatesResult));
	}
	/**
	 * Set GetHistoricalRatesResult
	 * @param HistoricalInterestRates GetHistoricalRatesResult
	 * @return HistoricalInterestRates
	 */
	public function setGetHistoricalRatesResult($_GetHistoricalRatesResult)
	{
		return ($this->GetHistoricalRatesResult = $_GetHistoricalRatesResult);
	}
	/**
	 * Get GetHistoricalRatesResult
	 * @return XiInterBanksTypeHistoricalInterestRates
	 */
	public function getGetHistoricalRatesResult()
	{
		return $this->GetHistoricalRatesResult;
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