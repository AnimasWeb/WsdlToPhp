<?php
/**
 * Class file for XWebACHDirectoryTypeGetParticipantRequest
 * @date 09/07/2012
 */
/**
 * Class XWebACHDirectoryTypeGetParticipantRequest
 * @date 09/07/2012
 */
class XWebACHDirectoryTypeGetParticipantRequest extends XWebACHDirectoryWsdlClass
{
	/**
	 * The Routing_Number
	 * @var Routing_Number
	 */
	public $Routing_Number;
	/**
	 * Constructor
	 * @param Routing_Number Routing_Number
	 * @return XWebACHDirectoryTypeGetParticipantRequest
	 */
	public function __construct($_Routing_Number = null)
	{
		parent::__construct(array('Routing_Number'=>$_Routing_Number));
	}
	/**
	 * Set Routing_Number
	 * @param Routing_Number Routing_Number
	 * @return Routing_Number
	 */
	public function setRouting_Number($_Routing_Number)
	{
		return ($this->Routing_Number = $_Routing_Number);
	}
	/**
	 * Get Routing_Number
	 * @return Routing_Number
	 */
	public function getRouting_Number()
	{
		return $this->Routing_Number;
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