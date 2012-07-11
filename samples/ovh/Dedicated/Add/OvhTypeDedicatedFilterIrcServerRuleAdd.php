<?php
/**
 * Class file for OvhTypeDedicatedFilterIrcServerRuleAdd
 * @date 02/07/2012
 */
/**
 * Class OvhTypeDedicatedFilterIrcServerRuleAdd
 * @date 02/07/2012
 */
class OvhTypeDedicatedFilterIrcServerRuleAdd extends OvhWsdlClass
{
	/**
	 * The session
	 * @var string
	 */
	public $session;
	/**
	 * The hostname
	 * @var string
	 */
	public $hostname;
	/**
	 * The toIp
	 * @var string
	 */
	public $toIp;
	/**
	 * Constructor
	 * @param string session
	 * @param string hostname
	 * @param string toIp
	 * @return OvhTypeDedicatedFilterIrcServerRuleAdd
	 */
	public function __construct($_session = null,$_hostname = null,$_toIp = null)
	{
		parent::__construct(array('session'=>$_session,'hostname'=>$_hostname,'toIp'=>$_toIp));
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
	 * Set hostname
	 * @param string hostname
	 * @return string
	 */
	public function setHostname($_hostname)
	{
		return ($this->hostname = $_hostname);
	}
	/**
	 * Get hostname
	 * @return string
	 */
	public function getHostname()
	{
		return $this->hostname;
	}
	/**
	 * Set toIp
	 * @param string toIp
	 * @return string
	 */
	public function setToIp($_toIp)
	{
		return ($this->toIp = $_toIp);
	}
	/**
	 * Get toIp
	 * @return string
	 */
	public function getToIp()
	{
		return $this->toIp;
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