<?php
/**
 * Class file for OvhTypeAutomatedMailGetVolumeHistory
 * @date 02/07/2012
 */
/**
 * Class OvhTypeAutomatedMailGetVolumeHistory
 * @date 02/07/2012
 */
class OvhTypeAutomatedMailGetVolumeHistory extends OvhWsdlClass
{
	/**
	 * The session
	 * @var string
	 */
	public $session;
	/**
	 * The domain
	 * @var string
	 */
	public $domain;
	/**
	 * Constructor
	 * @param string session
	 * @param string domain
	 * @return OvhTypeAutomatedMailGetVolumeHistory
	 */
	public function __construct($_session = null,$_domain = null)
	{
		parent::__construct(array('session'=>$_session,'domain'=>$_domain));
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
	 * Set domain
	 * @param string domain
	 * @return string
	 */
	public function setDomain($_domain)
	{
		return ($this->domain = $_domain);
	}
	/**
	 * Get domain
	 * @return string
	 */
	public function getDomain()
	{
		return $this->domain;
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