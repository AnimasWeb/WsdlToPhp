<?php
/**
 * Class file for XiEnergyTypeFutureTypes
 * @date 08/07/2012
 */
/**
 * Class XiEnergyTypeFutureTypes
 * @date 08/07/2012
 */
class XiEnergyTypeFutureTypes extends XiEnergyWsdlClass
{
	/**
	 * Constant for value 'Future'
	 * @return string 'Future'
	 */
	const VALUE_FUTURE = 'Future';
	/**
	 * Constant for value 'Swap'
	 * @return string 'Swap'
	 */
	const VALUE_SWAP = 'Swap';
	/**
	 * Constructor
	 * @return XiEnergyTypeFutureTypes
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
		return in_array($_value,array(self::VALUE_FUTURE,self::VALUE_SWAP));
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