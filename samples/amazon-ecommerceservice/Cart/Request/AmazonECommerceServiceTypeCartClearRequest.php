<?php
/**
 * Class file for AmazonECommerceServiceTypeCartClearRequest
 * @date 10/07/2012
 */
/**
 * Class AmazonECommerceServiceTypeCartClearRequest
 * @date 10/07/2012
 */
class AmazonECommerceServiceTypeCartClearRequest extends AmazonECommerceServiceWsdlClass
{
	/**
	 * The CartId
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $CartId;
	/**
	 * The HMAC
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $HMAC;
	/**
	 * The MergeCart
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $MergeCart;
	/**
	 * The ResponseGroup
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var string
	 */
	public $ResponseGroup;
	/**
	 * Constructor
	 * @param string CartId
	 * @param string HMAC
	 * @param string MergeCart
	 * @param string ResponseGroup
	 * @return AmazonECommerceServiceTypeCartClearRequest
	 */
	public function __construct($_CartId = null,$_HMAC = null,$_MergeCart = null,$_ResponseGroup = null)
	{
		parent::__construct(array('CartId'=>$_CartId,'HMAC'=>$_HMAC,'MergeCart'=>$_MergeCart,'ResponseGroup'=>$_ResponseGroup));
	}
	/**
	 * Set CartId
	 * @param string CartId
	 * @return string
	 */
	public function setCartId($_CartId)
	{
		return ($this->CartId = $_CartId);
	}
	/**
	 * Get CartId
	 * @return string
	 */
	public function getCartId()
	{
		return $this->CartId;
	}
	/**
	 * Set HMAC
	 * @param string HMAC
	 * @return string
	 */
	public function setHMAC($_HMAC)
	{
		return ($this->HMAC = $_HMAC);
	}
	/**
	 * Get HMAC
	 * @return string
	 */
	public function getHMAC()
	{
		return $this->HMAC;
	}
	/**
	 * Set MergeCart
	 * @param string MergeCart
	 * @return string
	 */
	public function setMergeCart($_MergeCart)
	{
		return ($this->MergeCart = $_MergeCart);
	}
	/**
	 * Get MergeCart
	 * @return string
	 */
	public function getMergeCart()
	{
		return $this->MergeCart;
	}
	/**
	 * Set ResponseGroup
	 * @param string ResponseGroup
	 * @return string
	 */
	public function setResponseGroup($_ResponseGroup)
	{
		return ($this->ResponseGroup = $_ResponseGroup);
	}
	/**
	 * Get ResponseGroup
	 * @return string
	 */
	public function getResponseGroup()
	{
		return $this->ResponseGroup;
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