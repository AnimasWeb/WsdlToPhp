<?php
/**
 * Class file for OvhTypeTelephonyRedirectModify
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonyRedirectModify
 * @date 02/07/2012
 */
class OvhTypeTelephonyRedirectModify extends OvhWsdlClass
{
	/**
	 * The session
	 * @var string
	 */
	public $session;
	/**
	 * The number
	 * @var string
	 */
	public $number;
	/**
	 * The country
	 * @var string
	 */
	public $country;
	/**
	 * The destination
	 * @var string
	 */
	public $destination;
	/**
	 * Constructor
	 * @param string session
	 * @param string number
	 * @param string country
	 * @param string destination
	 * @return OvhTypeTelephonyRedirectModify
	 */
	public function __construct($_session = null,$_number = null,$_country = null,$_destination = null)
	{
		parent::__construct(array('session'=>$_session,'number'=>$_number,'country'=>$_country,'destination'=>$_destination));
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
	 * Set number
	 * @param string number
	 * @return string
	 */
	public function setNumber($_number)
	{
		return ($this->number = $_number);
	}
	/**
	 * Get number
	 * @return string
	 */
	public function getNumber()
	{
		return $this->number;
	}
	/**
	 * Set country
	 * @param string country
	 * @return string
	 */
	public function setCountry($_country)
	{
		return ($this->country = $_country);
	}
	/**
	 * Get country
	 * @return string
	 */
	public function getCountry()
	{
		return $this->country;
	}
	/**
	 * Set destination
	 * @param string destination
	 * @return string
	 */
	public function setDestination($_destination)
	{
		return ($this->destination = $_destination);
	}
	/**
	 * Get destination
	 * @return string
	 */
	public function getDestination()
	{
		return $this->destination;
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