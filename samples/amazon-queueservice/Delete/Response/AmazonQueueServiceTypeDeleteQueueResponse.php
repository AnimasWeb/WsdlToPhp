<?php
/**
 * Class file for AmazonQueueServiceTypeDeleteQueueResponse
 * @date 10/07/2012
 */
/**
 * Class AmazonQueueServiceTypeDeleteQueueResponse
 * @date 10/07/2012
 */
class AmazonQueueServiceTypeDeleteQueueResponse extends AmazonQueueServiceWsdlClass
{
	/**
	 * The ResponseMetadata
	 * @var AmazonQueueServiceTypeResponseMetadata
	 */
	public $ResponseMetadata;
	/**
	 * Constructor
	 * @param AmazonQueueServiceTypeResponseMetadata ResponseMetadata
	 * @return AmazonQueueServiceTypeDeleteQueueResponse
	 */
	public function __construct($_ResponseMetadata = null)
	{
		parent::__construct(array('ResponseMetadata'=>$_ResponseMetadata));
	}
	/**
	 * Set ResponseMetadata
	 * @param ResponseMetadata ResponseMetadata
	 * @return ResponseMetadata
	 */
	public function setResponseMetadata($_ResponseMetadata)
	{
		return ($this->ResponseMetadata = $_ResponseMetadata);
	}
	/**
	 * Get ResponseMetadata
	 * @return AmazonQueueServiceTypeResponseMetadata
	 */
	public function getResponseMetadata()
	{
		return $this->ResponseMetadata;
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