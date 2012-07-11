<?php
/**
 * Class file for AmazonQueueServiceTypeSetQueueAttributes
 * @date 10/07/2012
 */
/**
 * Class AmazonQueueServiceTypeSetQueueAttributes
 * @date 10/07/2012
 */
class AmazonQueueServiceTypeSetQueueAttributes extends AmazonQueueServiceWsdlClass
{
	/**
	 * The Attribute
	 * @var AmazonQueueServiceTypeAttribute
	 */
	public $Attribute;
	/**
	 * Constructor
	 * @param AmazonQueueServiceTypeAttribute Attribute
	 * @return AmazonQueueServiceTypeSetQueueAttributes
	 */
	public function __construct($_Attribute = null)
	{
		parent::__construct(array('Attribute'=>$_Attribute));
	}
	/**
	 * Set Attribute
	 * @param Attribute Attribute
	 * @return Attribute
	 */
	public function setAttribute($_Attribute)
	{
		return ($this->Attribute = $_Attribute);
	}
	/**
	 * Get Attribute
	 * @return AmazonQueueServiceTypeAttribute
	 */
	public function getAttribute()
	{
		return $this->Attribute;
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