<?php
/**
 * Class file for XiVWAPTypeOutcomeTypes
 * @date 08/07/2012
 */
/**
 * Class XiVWAPTypeOutcomeTypes
 * @date 08/07/2012
 */
class XiVWAPTypeOutcomeTypes extends XiVWAPWsdlClass
{
	/**
	 * Constant for value 'Success'
	 * @return string 'Success'
	 */
	const VALUE_SUCCESS = 'Success';
	/**
	 * Constant for value 'SystemError'
	 * @return string 'SystemError'
	 */
	const VALUE_SYSTEMERROR = 'SystemError';
	/**
	 * Constant for value 'RequestError'
	 * @return string 'RequestError'
	 */
	const VALUE_REQUESTERROR = 'RequestError';
	/**
	 * Constant for value 'RegistrationError'
	 * @return string 'RegistrationError'
	 */
	const VALUE_REGISTRATIONERROR = 'RegistrationError';
	/**
	 * Constructor
	 * @return XiVWAPTypeOutcomeTypes
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
		return in_array($_value,array(self::VALUE_SUCCESS,self::VALUE_SYSTEMERROR,self::VALUE_REQUESTERROR,self::VALUE_REGISTRATIONERROR));
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