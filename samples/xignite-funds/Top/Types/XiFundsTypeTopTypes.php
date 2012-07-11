<?php
/**
 * Class file for XiFundsTypeTopTypes
 * @date 08/07/2012
 */
/**
 * Class XiFundsTypeTopTypes
 * @date 08/07/2012
 */
class XiFundsTypeTopTypes extends XiFundsWsdlClass
{
	/**
	 * Constant for value 'Gainers'
	 * @return string 'Gainers'
	 */
	const VALUE_GAINERS = 'Gainers';
	/**
	 * Constant for value 'Losers'
	 * @return string 'Losers'
	 */
	const VALUE_LOSERS = 'Losers';
	/**
	 * Constructor
	 * @return XiFundsTypeTopTypes
	 */
	public function __construct()
	{
		parent::__construct(array());
	}
	/**
	 * Return true if value is allowed
	 * @param string value
	 * @return bool true|false
	 */
	public static function valueIsValid($_value)
	{
		return in_array($_value,array(self::VALUE_GAINERS,self::VALUE_LOSERS));
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