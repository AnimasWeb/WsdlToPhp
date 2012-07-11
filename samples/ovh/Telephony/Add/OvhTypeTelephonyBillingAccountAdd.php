<?php
/**
 * Class file for OvhTypeTelephonyBillingAccountAdd
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonyBillingAccountAdd
 * @date 02/07/2012
 */
class OvhTypeTelephonyBillingAccountAdd extends OvhWsdlClass
{
	/**
	 * The session
	 * @var string
	 */
	public $session;
	/**
	 * Constructor
	 * @param string session
	 * @return OvhTypeTelephonyBillingAccountAdd
	 */
	public function __construct($_session = null)
	{
		parent::__construct(array('session'=>$_session));
	}
	/**
	 * Set session
	 * @param string session
	 * @return string
	 */
	public function setSession($_session)
	{
		return ($this->session = $_session);
	}
	/**
	 * Get session
	 * @return string
	 */
	public function getSession()
	{
		return $this->session;
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