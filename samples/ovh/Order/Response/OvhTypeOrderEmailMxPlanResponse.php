<?php
/**
 * Class file for OvhTypeOrderEmailMxPlanResponse
 * @date 02/07/2012
 */
/**
 * Class OvhTypeOrderEmailMxPlanResponse
 * @date 02/07/2012
 */
class OvhTypeOrderEmailMxPlanResponse extends OvhWsdlClass
{
	/**
	 * The return
	 * @var OvhTypeOrderStruct
	 */
	public $return;
	/**
	 * Constructor
	 * @param OvhTypeOrderStruct return
	 * @return OvhTypeOrderEmailMxPlanResponse
	 */
	public function __construct($_return = null)
	{
		parent::__construct(array('return'=>$_return));
	}
	/**
	 * Set return
	 * @param orderStruct return
	 * @return orderStruct
	 */
	public function setReturn($_return)
	{
		return ($this->return = $_return);
	}
	/**
	 * Get return
	 * @return OvhTypeorderStruct
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