<?php
/**
 * Class file for XiMetalsTypeGetHistoricalSpotPriceRangeInForeignCurrency
 * @date 08/07/2012
 */
/**
 * Class XiMetalsTypeGetHistoricalSpotPriceRangeInForeignCurrency
 * @date 08/07/2012
 */
class XiMetalsTypeGetHistoricalSpotPriceRangeInForeignCurrency extends XiMetalsWsdlClass
{
	/**
	 * The Type
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiMetalsTypeMetalTypes
	 */
	public $Type;
	/**
	 * The Currency
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiMetalsTypeCurrencies
	 */
	public $Currency;
	/**
	 * The StartDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $StartDate;
	/**
	 * The EndDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $EndDate;
	/**
	 * Constructor
	 * @param XiMetalsTypeMetalTypes Type
	 * @param XiMetalsTypeCurrencies Currency
	 * @param string StartDate
	 * @param string EndDate
	 * @return XiMetalsTypeGetHistoricalSpotPriceRangeInForeignCurrency
	 */
	public function __construct($_Type,$_Currency,$_StartDate = null,$_EndDate = null)
	{
		parent::__construct(array('Type'=>$_Type,'Currency'=>$_Currency,'StartDate'=>$_StartDate,'EndDate'=>$_EndDate));
	}
	/**
	 * Set Type
	 * @param MetalTypes Type
	 * @return MetalTypes
	 */
	public function setType($_Type)
	{
		return ($this->Type = XiMetalsTypeMetalTypes::valueIsValid($_Type)?$_Type:null);
	}
	/**
	 * Get Type
	 * @return XiMetalsTypeMetalTypes
	 */
	public function getType()
	{
		return $this->Type;
	}
	/**
	 * Set Currency
	 * @param Currencies Currency
	 * @return Currencies
	 */
	public function setCurrency($_Currency)
	{
		return ($this->Currency = XiMetalsTypeCurrencies::valueIsValid($_Currency)?$_Currency:null);
	}
	/**
	 * Get Currency
	 * @return XiMetalsTypeCurrencies
	 */
	public function getCurrency()
	{
		return $this->Currency;
	}
	/**
	 * Set StartDate
	 * @param string StartDate
	 * @return string
	 */
	public function setStartDate($_StartDate)
	{
		return ($this->StartDate = $_StartDate);
	}
	/**
	 * Get StartDate
	 * @return string
	 */
	public function getStartDate()
	{
		return $this->StartDate;
	}
	/**
	 * Set EndDate
	 * @param string EndDate
	 * @return string
	 */
	public function setEndDate($_EndDate)
	{
		return ($this->EndDate = $_EndDate);
	}
	/**
	 * Get EndDate
	 * @return string
	 */
	public function getEndDate()
	{
		return $this->EndDate;
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