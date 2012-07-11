<?php
/**
 * Class file for OvhTypeCrontabAdd
 * @date 02/07/2012
 */
/**
 * Class OvhTypeCrontabAdd
 * @date 02/07/2012
 */
class OvhTypeCrontabAdd extends OvhWsdlClass
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
	 * The path
	 * @var string
	 */
	public $path;
	/**
	 * The programLanguage
	 * @var string
	 */
	public $programLanguage;
	/**
	 * The weekDay
	 * @var string
	 */
	public $weekDay;
	/**
	 * The days
	 * @var string
	 */
	public $days;
	/**
	 * The hours
	 * @var string
	 */
	public $hours;
	/**
	 * The desc
	 * @var string
	 */
	public $desc;
	/**
	 * The email
	 * @var string
	 */
	public $email;
	/**
	 * The otherEmail
	 * @var string
	 */
	public $otherEmail;
	/**
	 * Constructor
	 * @param string session
	 * @param string domain
	 * @param string path
	 * @param string programLanguage
	 * @param string weekDay
	 * @param string days
	 * @param string hours
	 * @param string desc
	 * @param string email
	 * @param string otherEmail
	 * @return OvhTypeCrontabAdd
	 */
	public function __construct($_session = null,$_domain = null,$_path = null,$_programLanguage = null,$_weekDay = null,$_days = null,$_hours = null,$_desc = null,$_email = null,$_otherEmail = null)
	{
		parent::__construct(array('session'=>$_session,'domain'=>$_domain,'path'=>$_path,'programLanguage'=>$_programLanguage,'weekDay'=>$_weekDay,'days'=>$_days,'hours'=>$_hours,'desc'=>$_desc,'email'=>$_email,'otherEmail'=>$_otherEmail));
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
	 * Set path
	 * @param string path
	 * @return string
	 */
	public function setPath($_path)
	{
		return ($this->path = $_path);
	}
	/**
	 * Get path
	 * @return string
	 */
	public function getPath()
	{
		return $this->path;
	}
	/**
	 * Set programLanguage
	 * @param string programLanguage
	 * @return string
	 */
	public function setProgramLanguage($_programLanguage)
	{
		return ($this->programLanguage = $_programLanguage);
	}
	/**
	 * Get programLanguage
	 * @return string
	 */
	public function getProgramLanguage()
	{
		return $this->programLanguage;
	}
	/**
	 * Set weekDay
	 * @param string weekDay
	 * @return string
	 */
	public function setWeekDay($_weekDay)
	{
		return ($this->weekDay = $_weekDay);
	}
	/**
	 * Get weekDay
	 * @return string
	 */
	public function getWeekDay()
	{
		return $this->weekDay;
	}
	/**
	 * Set days
	 * @param string days
	 * @return string
	 */
	public function setDays($_days)
	{
		return ($this->days = $_days);
	}
	/**
	 * Get days
	 * @return string
	 */
	public function getDays()
	{
		return $this->days;
	}
	/**
	 * Set hours
	 * @param string hours
	 * @return string
	 */
	public function setHours($_hours)
	{
		return ($this->hours = $_hours);
	}
	/**
	 * Get hours
	 * @return string
	 */
	public function getHours()
	{
		return $this->hours;
	}
	/**
	 * Set desc
	 * @param string desc
	 * @return string
	 */
	public function setDesc($_desc)
	{
		return ($this->desc = $_desc);
	}
	/**
	 * Get desc
	 * @return string
	 */
	public function getDesc()
	{
		return $this->desc;
	}
	/**
	 * Set email
	 * @param string email
	 * @return string
	 */
	public function setEmail($_email)
	{
		return ($this->email = $_email);
	}
	/**
	 * Get email
	 * @return string
	 */
	public function getEmail()
	{
		return $this->email;
	}
	/**
	 * Set otherEmail
	 * @param string otherEmail
	 * @return string
	 */
	public function setOtherEmail($_otherEmail)
	{
		return ($this->otherEmail = $_otherEmail);
	}
	/**
	 * Get otherEmail
	 * @return string
	 */
	public function getOtherEmail()
	{
		return $this->otherEmail;
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