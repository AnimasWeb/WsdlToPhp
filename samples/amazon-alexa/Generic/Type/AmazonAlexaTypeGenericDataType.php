<?php
/**
 * Class file for AmazonAlexaTypeGenericDataType
 * @date 10/07/2012
 */
/**
 * Class AmazonAlexaTypeGenericDataType
 * @date 10/07/2012
 */
class AmazonAlexaTypeGenericDataType extends AmazonAlexaWsdlClass
{
	/**
	 * The _
	 * @var string
	 */
	public $_;
	/**
	 * Constructor
	 * @param string _
	 * @return AmazonAlexaTypeGenericDataType
	 */
	public function __construct($__ = null)
	{
		parent::__construct(array('_'=>$__));
	}
	/**
	 * Set _
	 * @param string _
	 * @return string
	 */
	public function set_($__)
	{
		return ($this->_ = $__);
	}
	/**
	 * Get _
	 * @return string
	 */
	public function get_()
	{
		return $this->_;
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