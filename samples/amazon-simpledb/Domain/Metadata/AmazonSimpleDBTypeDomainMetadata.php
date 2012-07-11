<?php
/**
 * Class file for AmazonSimpleDBTypeDomainMetadata
 * @date 10/07/2012
 */
/**
 * Class AmazonSimpleDBTypeDomainMetadata
 * @date 10/07/2012
 */
class AmazonSimpleDBTypeDomainMetadata extends AmazonSimpleDBWsdlClass
{
	/**
	 * The DomainName
	 * @var string
	 */
	public $DomainName;
	/**
	 * Constructor
	 * @param string DomainName
	 * @return AmazonSimpleDBTypeDomainMetadata
	 */
	public function __construct($_DomainName = null)
	{
		parent::__construct(array('DomainName'=>$_DomainName));
	}
	/**
	 * Set DomainName
	 * @param string DomainName
	 * @return string
	 */
	public function setDomainName($_DomainName)
	{
		return ($this->DomainName = $_DomainName);
	}
	/**
	 * Get DomainName
	 * @return string
	 */
	public function getDomainName()
	{
		return $this->DomainName;
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