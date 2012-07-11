<?php
/**
 * Class file for XWebLeadTypeUpdateLeadRequest
 * @date 09/07/2012
 */
/**
 * Class XWebLeadTypeUpdateLeadRequest
 * @date 09/07/2012
 */
class XWebLeadTypeUpdateLeadRequest extends XWebLeadWsdlClass
{
	/**
	 * The Lead
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XWebLeadTypeLead
	 */
	public $Lead;
	/**
	 * Constructor
	 * @param XWebLeadTypeLead Lead
	 * @return XWebLeadTypeUpdateLeadRequest
	 */
	public function __construct($_Lead)
	{
		parent::__construct(array('Lead'=>$_Lead));
	}
	/**
	 * Set Lead
	 * @param Lead Lead
	 * @return Lead
	 */
	public function setLead($_Lead)
	{
		return ($this->Lead = $_Lead);
	}
	/**
	 * Get Lead
	 * @return XWebLeadTypeLead
	 */
	public function getLead()
	{
		return $this->Lead;
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