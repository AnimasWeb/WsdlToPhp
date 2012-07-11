<?php
/**
 * Class file for XiCurrenciesTypeGetHistoricalTicksResponse
 * @date 08/07/2012
 */
/**
 * Class XiCurrenciesTypeGetHistoricalTicksResponse
 * @date 08/07/2012
 */
class XiCurrenciesTypeGetHistoricalTicksResponse extends XiCurrenciesWsdlClass
{
	/**
	 * The GetHistoricalTicksResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiCurrenciesTypeTicks
	 */
	public $GetHistoricalTicksResult;
	/**
	 * Constructor
	 * @param XiCurrenciesTypeTicks GetHistoricalTicksResult
	 * @return XiCurrenciesTypeGetHistoricalTicksResponse
	 */
	public function __construct($_GetHistoricalTicksResult = null)
	{
		parent::__construct(array('GetHistoricalTicksResult'=>$_GetHistoricalTicksResult));
	}
	/**
	 * Set GetHistoricalTicksResult
	 * @param Ticks GetHistoricalTicksResult
	 * @return Ticks
	 */
	public function setGetHistoricalTicksResult($_GetHistoricalTicksResult)
	{
		return ($this->GetHistoricalTicksResult = $_GetHistoricalTicksResult);
	}
	/**
	 * Get GetHistoricalTicksResult
	 * @return XiCurrenciesTypeTicks
	 */
	public function getGetHistoricalTicksResult()
	{
		return $this->GetHistoricalTicksResult;
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