<?php
/**
 * Class file for SPWebsTypeGetCustomizedPageStatus
 * @date 06/07/2012
 */
/**
 * Class SPWebsTypeGetCustomizedPageStatus
 * @date 06/07/2012
 */
class SPWebsTypeGetCustomizedPageStatus extends SPWebsWsdlClass
{
	/**
	 * The fileUrl
	 * @var string
	 */
	public $fileUrl;
	/**
	 * Constructor
	 * @param string fileUrl
	 * @return SPWebsTypeGetCustomizedPageStatus
	 */
	public function __construct($_fileUrl = null)
	{
		parent::__construct(array('fileUrl'=>$_fileUrl));
	}
	/**
	 * Set fileUrl
	 * @param string fileUrl
	 * @return string
	 */
	public function setFileUrl($_fileUrl)
	{
		return ($this->fileUrl = $_fileUrl);
	}
	/**
	 * Get fileUrl
	 * @return string
	 */
	public function getFileUrl()
	{
		return $this->fileUrl;
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