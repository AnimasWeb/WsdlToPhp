<?php
/**
 * Class file for OvhTypeTelephonySecurityDepositInfoResponse
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonySecurityDepositInfoResponse
 * @date 02/07/2012
 */
class OvhTypeTelephonySecurityDepositInfoResponse extends OvhWsdlClass
{
	/**
	 * The return
	 * @var float
	 */
	public $return;
	/**
	 * Constructor
	 * @param float return
	 * @return OvhTypeTelephonySecurityDepositInfoResponse
	 */
	public function __construct($_return = null)
	{
		parent::__construct(array('return'=>$_return));
	}
	/**
	 * Set return
	 * @param float return
	 * @return float
	 */
	public function setReturn($_return)
	{
		return ($this->return = $_return);
	}
	/**
	 * Get return
	 * @return float
	 */
	public function getReturn()
	{
		return $this->return;
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