<?php
/**
 * Class file for OvhTypeDedicatedIpLoadBalancingServerStateModify
 * @date 02/07/2012
 */
/**
 * Class OvhTypeDedicatedIpLoadBalancingServerStateModify
 * @date 02/07/2012
 */
class OvhTypeDedicatedIpLoadBalancingServerStateModify extends OvhWsdlClass
{
	/**
	 * The session
	 * @var string
	 */
	public $session;
	/**
	 * The ipLoadBalancing
	 * @var string
	 */
	public $ipLoadBalancing;
	/**
	 * The hostname
	 * @var string
	 */
	public $hostname;
	/**
	 * The state
	 * @var string
	 */
	public $state;
	/**
	 * Constructor
	 * @param string session
	 * @param string ipLoadBalancing
	 * @param string hostname
	 * @param string state
	 * @return OvhTypeDedicatedIpLoadBalancingServerStateModify
	 */
	public function __construct($_session = null,$_ipLoadBalancing = null,$_hostname = null,$_state = null)
	{
		parent::__construct(array('session'=>$_session,'ipLoadBalancing'=>$_ipLoadBalancing,'hostname'=>$_hostname,'state'=>$_state));
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
	 * Set ipLoadBalancing
	 * @param string ipLoadBalancing
	 * @return string
	 */
	public function setIpLoadBalancing($_ipLoadBalancing)
	{
		return ($this->ipLoadBalancing = $_ipLoadBalancing);
	}
	/**
	 * Get ipLoadBalancing
	 * @return string
	 */
	public function getIpLoadBalancing()
	{
		return $this->ipLoadBalancing;
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
	 * Set state
	 * @param string state
	 * @return string
	 */
	public function setState($_state)
	{
		return ($this->state = $_state);
	}
	/**
	 * Get state
	 * @return string
	 */
	public function getState()
	{
		return $this->state;
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