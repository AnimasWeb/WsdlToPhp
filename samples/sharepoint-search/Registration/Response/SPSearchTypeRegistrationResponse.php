<?php
/**
 * Class file for SPSearchTypeRegistrationResponse
 * @date 06/07/2012
 */
/**
 * Class SPSearchTypeRegistrationResponse
 * @date 06/07/2012
 */
class SPSearchTypeRegistrationResponse extends SPSearchWsdlClass
{
	/**
	 * The RegistrationResult
	 * @var string
	 */
	public $RegistrationResult;
	/**
	 * Constructor
	 * @param string RegistrationResult
	 * @return SPSearchTypeRegistrationResponse
	 */
	public function __construct($_RegistrationResult = null)
	{
		parent::__construct(array('RegistrationResult'=>$_RegistrationResult));
	}
	/**
	 * Set RegistrationResult
	 * @param string RegistrationResult
	 * @return string
	 */
	public function setRegistrationResult($_RegistrationResult)
	{
		return ($this->RegistrationResult = $_RegistrationResult);
	}
	/**
	 * Get RegistrationResult
	 * @return string
	 */
	public function getRegistrationResult()
	{
		return $this->RegistrationResult;
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