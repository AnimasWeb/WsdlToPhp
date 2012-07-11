<?php
/**
 * Class file for OvhTypeTelephonyListReversableCallsFromNumber
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonyListReversableCallsFromNumber
 * @date 02/07/2012
 */
class OvhTypeTelephonyListReversableCallsFromNumber extends OvhWsdlClass
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
	 * The reversableDelay
	 * @var string
	 */
	public $reversableDelay;
	/**
	 * The pagingStart
	 * @var int
	 */
	public $pagingStart;
	/**
	 * The pagingLimit
	 * @var int
	 */
	public $pagingLimit;
	/**
	 * The sortOrder
	 * @var string
	 */
	public $sortOrder;
	/**
	 * The sortField
	 * @var string
	 */
	public $sortField;
	/**
	 * Constructor
	 * @param string session
	 * @param string number
	 * @param string country
	 * @param string reversableDelay
	 * @param int pagingStart
	 * @param int pagingLimit
	 * @param string sortOrder
	 * @param string sortField
	 * @return OvhTypeTelephonyListReversableCallsFromNumber
	 */
	public function __construct($_session = null,$_number = null,$_country = null,$_reversableDelay = null,$_pagingStart = null,$_pagingLimit = null,$_sortOrder = null,$_sortField = null)
	{
		parent::__construct(array('session'=>$_session,'number'=>$_number,'country'=>$_country,'reversableDelay'=>$_reversableDelay,'pagingStart'=>$_pagingStart,'pagingLimit'=>$_pagingLimit,'sortOrder'=>$_sortOrder,'sortField'=>$_sortField));
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
	 * Set reversableDelay
	 * @param string reversableDelay
	 * @return string
	 */
	public function setReversableDelay($_reversableDelay)
	{
		return ($this->reversableDelay = $_reversableDelay);
	}
	/**
	 * Get reversableDelay
	 * @return string
	 */
	public function getReversableDelay()
	{
		return $this->reversableDelay;
	}
	/**
	 * Set pagingStart
	 * @param int pagingStart
	 * @return int
	 */
	public function setPagingStart($_pagingStart)
	{
		return ($this->pagingStart = $_pagingStart);
	}
	/**
	 * Get pagingStart
	 * @return int
	 */
	public function getPagingStart()
	{
		return $this->pagingStart;
	}
	/**
	 * Set pagingLimit
	 * @param int pagingLimit
	 * @return int
	 */
	public function setPagingLimit($_pagingLimit)
	{
		return ($this->pagingLimit = $_pagingLimit);
	}
	/**
	 * Get pagingLimit
	 * @return int
	 */
	public function getPagingLimit()
	{
		return $this->pagingLimit;
	}
	/**
	 * Set sortOrder
	 * @param string sortOrder
	 * @return string
	 */
	public function setSortOrder($_sortOrder)
	{
		return ($this->sortOrder = $_sortOrder);
	}
	/**
	 * Get sortOrder
	 * @return string
	 */
	public function getSortOrder()
	{
		return $this->sortOrder;
	}
	/**
	 * Set sortField
	 * @param string sortField
	 * @return string
	 */
	public function setSortField($_sortField)
	{
		return ($this->sortField = $_sortField);
	}
	/**
	 * Get sortField
	 * @return string
	 */
	public function getSortField()
	{
		return $this->sortField;
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