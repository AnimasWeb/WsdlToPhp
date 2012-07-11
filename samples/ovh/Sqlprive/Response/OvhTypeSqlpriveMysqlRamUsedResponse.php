<?php
/**
 * Class file for OvhTypeSqlpriveMysqlRamUsedResponse
 * @date 02/07/2012
 */
/**
 * Class OvhTypeSqlpriveMysqlRamUsedResponse
 * @date 02/07/2012
 */
class OvhTypeSqlpriveMysqlRamUsedResponse extends OvhWsdlClass
{
	/**
	 * The return
	 * @var string
	 */
	public $return;
	/**
	 * Constructor
	 * @param string return
	 * @return OvhTypeSqlpriveMysqlRamUsedResponse
	 */
	public function __construct($_return = null)
	{
		parent::__construct(array('return'=>$_return));
	}
	/**
	 * Set return
	 * @param string return
	 * @return string
	 */
	public function setReturn($_return)
	{
		return ($this->return = $_return);
	}
	/**
	 * Get return
	 * @return string
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