<?php
/**
 * Class file for XWebFAQsTypeLoadFAQResponse
 * @date 09/07/2012
 */
/**
 * Class XWebFAQsTypeLoadFAQResponse
 * @date 09/07/2012
 */
class XWebFAQsTypeLoadFAQResponse extends XWebFAQsWsdlClass
{
	/**
	 * The FAQ
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XWebFAQsTypeFAQ
	 */
	public $FAQ;
	/**
	 * Constructor
	 * @param XWebFAQsTypeFAQ FAQ
	 * @return XWebFAQsTypeLoadFAQResponse
	 */
	public function __construct($_FAQ)
	{
		parent::__construct(array('FAQ'=>$_FAQ));
	}
	/**
	 * Set FAQ
	 * @param FAQ FAQ
	 * @return FAQ
	 */
	public function setFAQ($_FAQ)
	{
		return ($this->FAQ = $_FAQ);
	}
	/**
	 * Get FAQ
	 * @return XWebFAQsTypeFAQ
	 */
	public function getFAQ()
	{
		return $this->FAQ;
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