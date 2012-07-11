<?php
/**
 * Class file for XiInterBanksTypeSABORTypes
 * @date 08/07/2012
 */
/**
 * Class XiInterBanksTypeSABORTypes
 * @date 08/07/2012
 */
class XiInterBanksTypeSABORTypes extends XiInterBanksWsdlClass
{
	/**
	 * Constant for value 'Overnight'
	 * @return string 'Overnight'
	 */
	const VALUE_OVERNIGHT = 'Overnight';
	/**
	 * Constructor
	 * @return XiInterBanksTypeSABORTypes
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
		return in_array($_value,array(self::VALUE_OVERNIGHT));
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