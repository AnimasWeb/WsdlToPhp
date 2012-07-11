<?php
/**
 * Class file for XiEdgarTypeReadDocument
 * @date 08/07/2012
 */
/**
 * Class XiEdgarTypeReadDocument
 * @date 08/07/2012
 */
class XiEdgarTypeReadDocument extends XiEdgarWsdlClass
{
	/**
	 * The HtmlFileUrl
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $HtmlFileUrl;
	/**
	 * Constructor
	 * @param string HtmlFileUrl
	 * @return XiEdgarTypeReadDocument
	 */
	public function __construct($_HtmlFileUrl = null)
	{
		parent::__construct(array('HtmlFileUrl'=>$_HtmlFileUrl));
	}
	/**
	 * Set HtmlFileUrl
	 * @param string HtmlFileUrl
	 * @return string
	 */
	public function setHtmlFileUrl($_HtmlFileUrl)
	{
		return ($this->HtmlFileUrl = $_HtmlFileUrl);
	}
	/**
	 * Get HtmlFileUrl
	 * @return string
	 */
	public function getHtmlFileUrl()
	{
		return $this->HtmlFileUrl;
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