<?php
/**
 * Class file for XiFinancialsTypeIdentifierTypes
 * @date 08/07/2012
 */
/**
 * Class XiFinancialsTypeIdentifierTypes
 * @date 08/07/2012
 */
class XiFinancialsTypeIdentifierTypes extends XiFinancialsWsdlClass
{
	/**
	 * Constant for value 'Symbol'
	 * @return string 'Symbol'
	 */
	const VALUE_SYMBOL = 'Symbol';
	/**
	 * Constant for value 'CIK'
	 * @return string 'CIK'
	 */
	const VALUE_CIK = 'CIK';
	/**
	 * Constant for value 'CUSIP'
	 * @return string 'CUSIP'
	 */
	const VALUE_CUSIP = 'CUSIP';
	/**
	 * Constant for value 'ISIN'
	 * @return string 'ISIN'
	 */
	const VALUE_ISIN = 'ISIN';
	/**
	 * Constant for value 'Valoren'
	 * @return string 'Valoren'
	 */
	const VALUE_VALOREN = 'Valoren';
	/**
	 * Constant for value 'SEDOL'
	 * @return string 'SEDOL'
	 */
	const VALUE_SEDOL = 'SEDOL';
	/**
	 * Constructor
	 * @return XiFinancialsTypeIdentifierTypes
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
		return in_array($_value,array(self::VALUE_SYMBOL,self::VALUE_CIK,self::VALUE_CUSIP,self::VALUE_ISIN,self::VALUE_VALOREN,self::VALUE_SEDOL));
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