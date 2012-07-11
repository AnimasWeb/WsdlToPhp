<?php
/**
 * Class file for XiQuotesTypeGetHistoricalTicks
 * @date 08/07/2012
 */
/**
 * Class XiQuotesTypeGetHistoricalTicks
 * @date 08/07/2012
 */
class XiQuotesTypeGetHistoricalTicks extends XiQuotesWsdlClass
{
	/**
	 * The Symbol
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Symbol;
	/**
	 * The HistoricalPeriod
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiQuotesTypeHistoricalPeriods
	 */
	public $HistoricalPeriod;
	/**
	 * The StartTime
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $StartTime;
	/**
	 * The EndTime
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $EndTime;
	/**
	 * The TickPrecision
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiQuotesTypeTickPeriod
	 */
	public $TickPrecision;
	/**
	 * The TickPeriods
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $TickPeriods;
	/**
	 * Constructor
	 * @param string Symbol
	 * @param XiQuotesTypeHistoricalPeriods HistoricalPeriod
	 * @param string StartTime
	 * @param string EndTime
	 * @param XiQuotesTypeTickPeriod TickPrecision
	 * @param int TickPeriods
	 * @return XiQuotesTypeGetHistoricalTicks
	 */
	public function __construct($_Symbol = null,$_HistoricalPeriod,$_StartTime = null,$_EndTime = null,$_TickPrecision,$_TickPeriods)
	{
		parent::__construct(array('Symbol'=>$_Symbol,'HistoricalPeriod'=>$_HistoricalPeriod,'StartTime'=>$_StartTime,'EndTime'=>$_EndTime,'TickPrecision'=>$_TickPrecision,'TickPeriods'=>$_TickPeriods));
	}
	/**
	 * Set Symbol
	 * @param string Symbol
	 * @return string
	 */
	public function setSymbol($_Symbol)
	{
		return ($this->Symbol = $_Symbol);
	}
	/**
	 * Get Symbol
	 * @return string
	 */
	public function getSymbol()
	{
		return $this->Symbol;
	}
	/**
	 * Set HistoricalPeriod
	 * @param HistoricalPeriods HistoricalPeriod
	 * @return HistoricalPeriods
	 */
	public function setHistoricalPeriod($_HistoricalPeriod)
	{
		return ($this->HistoricalPeriod = XiQuotesTypeHistoricalPeriods::valueIsValid($_HistoricalPeriod)?$_HistoricalPeriod:null);
	}
	/**
	 * Get HistoricalPeriod
	 * @return XiQuotesTypeHistoricalPeriods
	 */
	public function getHistoricalPeriod()
	{
		return $this->HistoricalPeriod;
	}
	/**
	 * Set StartTime
	 * @param string StartTime
	 * @return string
	 */
	public function setStartTime($_StartTime)
	{
		return ($this->StartTime = $_StartTime);
	}
	/**
	 * Get StartTime
	 * @return string
	 */
	public function getStartTime()
	{
		return $this->StartTime;
	}
	/**
	 * Set EndTime
	 * @param string EndTime
	 * @return string
	 */
	public function setEndTime($_EndTime)
	{
		return ($this->EndTime = $_EndTime);
	}
	/**
	 * Get EndTime
	 * @return string
	 */
	public function getEndTime()
	{
		return $this->EndTime;
	}
	/**
	 * Set TickPrecision
	 * @param TickPeriod TickPrecision
	 * @return TickPeriod
	 */
	public function setTickPrecision($_TickPrecision)
	{
		return ($this->TickPrecision = XiQuotesTypeTickPeriod::valueIsValid($_TickPrecision)?$_TickPrecision:null);
	}
	/**
	 * Get TickPrecision
	 * @return XiQuotesTypeTickPeriod
	 */
	public function getTickPrecision()
	{
		return $this->TickPrecision;
	}
	/**
	 * Set TickPeriods
	 * @param int TickPeriods
	 * @return int
	 */
	public function setTickPeriods($_TickPeriods)
	{
		return ($this->TickPeriods = $_TickPeriods);
	}
	/**
	 * Get TickPeriods
	 * @return int
	 */
	public function getTickPeriods()
	{
		return $this->TickPeriods;
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