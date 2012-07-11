<?php
/**
 * Class file for XiFuturesTypeListFuturesByExchange
 * @date 08/07/2012
 */
/**
 * Class XiFuturesTypeListFuturesByExchange
 * @date 08/07/2012
 */
class XiFuturesTypeListFuturesByExchange extends XiFuturesWsdlClass
{
	/**
	 * The Exchange
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Exchange;
	/**
	 * Constructor
	 * @param string Exchange
	 * @return XiFuturesTypeListFuturesByExchange
	 */
	public function __construct($_Exchange = null)
	{
		parent::__construct(array('Exchange'=>$_Exchange));
	}
	/**
	 * Set Exchange
	 * @param string Exchange
	 * @return string
	 */
	public function setExchange($_Exchange)
	{
		return ($this->Exchange = $_Exchange);
	}
	/**
	 * Get Exchange
	 * @return string
	 */
	public function getExchange()
	{
		return $this->Exchange;
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