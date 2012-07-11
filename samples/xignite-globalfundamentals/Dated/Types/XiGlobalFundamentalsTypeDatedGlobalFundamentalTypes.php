<?php
/**
 * Class file for XiGlobalFundamentalsTypeDatedGlobalFundamentalTypes
 * @date 08/07/2012
 */
/**
 * Class XiGlobalFundamentalsTypeDatedGlobalFundamentalTypes
 * @date 08/07/2012
 */
class XiGlobalFundamentalsTypeDatedGlobalFundamentalTypes extends XiGlobalFundamentalsWsdlClass
{
	/**
	 * Constant for value 'SharesOutstanding'
	 * @return string 'SharesOutstanding'
	 */
	const VALUE_SHARESOUTSTANDING = 'SharesOutstanding';
	/**
	 * Constructor
	 * @return XiGlobalFundamentalsTypeDatedGlobalFundamentalTypes
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
		return in_array($_value,array(self::VALUE_SHARESOUTSTANDING));
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