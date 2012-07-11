<?php
/**
 * Class file for AmazonECommerceServiceTypeBinParameter
 * @date 10/07/2012
 */
/**
 * Class AmazonECommerceServiceTypeBinParameter
 * @date 10/07/2012
 */
class AmazonECommerceServiceTypeBinParameter extends AmazonECommerceServiceWsdlClass
{
	/**
	 * The Name
	 * @var string
	 */
	public $Name;
	/**
	 * The Value
	 * @var string
	 */
	public $Value;
	/**
	 * Constructor
	 * @param string Name
	 * @param string Value
	 * @return AmazonECommerceServiceTypeBinParameter
	 */
	public function __construct($_Name = null,$_Value = null)
	{
		parent::__construct(array('Name'=>$_Name,'Value'=>$_Value));
	}
	/**
	 * Set Name
	 * @param string Name
	 * @return string
	 */
	public function setName($_Name)
	{
		return ($this->Name = $_Name);
	}
	/**
	 * Get Name
	 * @return string
	 */
	public function getName()
	{
		return $this->Name;
	}
	/**
	 * Set Value
	 * @param string Value
	 * @return string
	 */
	public function setValue($_Value)
	{
		return ($this->Value = $_Value);
	}
	/**
	 * Get Value
	 * @return string
	 */
	public function getValue()
	{
		return $this->Value;
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