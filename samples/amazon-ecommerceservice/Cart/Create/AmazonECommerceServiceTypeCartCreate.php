<?php
/**
 * Class file for AmazonECommerceServiceTypeCartCreate
 * @date 10/07/2012
 */
/**
 * Class AmazonECommerceServiceTypeCartCreate
 * @date 10/07/2012
 */
class AmazonECommerceServiceTypeCartCreate extends AmazonECommerceServiceWsdlClass
{
	/**
	 * The MarketplaceDomain
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $MarketplaceDomain;
	/**
	 * The AWSAccessKeyId
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $AWSAccessKeyId;
	/**
	 * The AssociateTag
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $AssociateTag;
	/**
	 * The Validate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $Validate;
	/**
	 * The XMLEscaping
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $XMLEscaping;
	/**
	 * The Shared
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var AmazonECommerceServiceTypeCartCreateRequest
	 */
	public $Shared;
	/**
	 * The Request
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var AmazonECommerceServiceTypeCartCreateRequest
	 */
	public $Request;
	/**
	 * Constructor
	 * @param string MarketplaceDomain
	 * @param string AWSAccessKeyId
	 * @param string AssociateTag
	 * @param string Validate
	 * @param string XMLEscaping
	 * @param AmazonECommerceServiceTypeCartCreateRequest Shared
	 * @param AmazonECommerceServiceTypeCartCreateRequest Request
	 * @return AmazonECommerceServiceTypeCartCreate
	 */
	public function __construct($_MarketplaceDomain = null,$_AWSAccessKeyId = null,$_AssociateTag = null,$_Validate = null,$_XMLEscaping = null,$_Shared = null,$_Request = null)
	{
		parent::__construct(array('MarketplaceDomain'=>$_MarketplaceDomain,'AWSAccessKeyId'=>$_AWSAccessKeyId,'AssociateTag'=>$_AssociateTag,'Validate'=>$_Validate,'XMLEscaping'=>$_XMLEscaping,'Shared'=>$_Shared,'Request'=>$_Request));
	}
	/**
	 * Set MarketplaceDomain
	 * @param string MarketplaceDomain
	 * @return string
	 */
	public function setMarketplaceDomain($_MarketplaceDomain)
	{
		return ($this->MarketplaceDomain = $_MarketplaceDomain);
	}
	/**
	 * Get MarketplaceDomain
	 * @return string
	 */
	public function getMarketplaceDomain()
	{
		return $this->MarketplaceDomain;
	}
	/**
	 * Set AWSAccessKeyId
	 * @param string AWSAccessKeyId
	 * @return string
	 */
	public function setAWSAccessKeyId($_AWSAccessKeyId)
	{
		return ($this->AWSAccessKeyId = $_AWSAccessKeyId);
	}
	/**
	 * Get AWSAccessKeyId
	 * @return string
	 */
	public function getAWSAccessKeyId()
	{
		return $this->AWSAccessKeyId;
	}
	/**
	 * Set AssociateTag
	 * @param string AssociateTag
	 * @return string
	 */
	public function setAssociateTag($_AssociateTag)
	{
		return ($this->AssociateTag = $_AssociateTag);
	}
	/**
	 * Get AssociateTag
	 * @return string
	 */
	public function getAssociateTag()
	{
		return $this->AssociateTag;
	}
	/**
	 * Set Validate
	 * @param string Validate
	 * @return string
	 */
	public function setValidate($_Validate)
	{
		return ($this->Validate = $_Validate);
	}
	/**
	 * Get Validate
	 * @return string
	 */
	public function getValidate()
	{
		return $this->Validate;
	}
	/**
	 * Set XMLEscaping
	 * @param string XMLEscaping
	 * @return string
	 */
	public function setXMLEscaping($_XMLEscaping)
	{
		return ($this->XMLEscaping = $_XMLEscaping);
	}
	/**
	 * Get XMLEscaping
	 * @return string
	 */
	public function getXMLEscaping()
	{
		return $this->XMLEscaping;
	}
	/**
	 * Set Shared
	 * @param CartCreateRequest Shared
	 * @return CartCreateRequest
	 */
	public function setShared($_Shared)
	{
		return ($this->Shared = $_Shared);
	}
	/**
	 * Get Shared
	 * @return AmazonECommerceServiceTypeCartCreateRequest
	 */
	public function getShared()
	{
		return $this->Shared;
	}
	/**
	 * Set Request
	 * @param CartCreateRequest Request
	 * @return CartCreateRequest
	 */
	public function setRequest($_Request)
	{
		return ($this->Request = $_Request);
	}
	/**
	 * Get Request
	 * @return AmazonECommerceServiceTypeCartCreateRequest
	 */
	public function getRequest()
	{
		return $this->Request;
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