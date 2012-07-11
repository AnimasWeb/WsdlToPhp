<?php
/**
 * Class file for EbayTradingTypeCheckoutStatusCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeCheckoutStatusCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeCheckoutStatusCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'CheckoutComplete'
	 * Meta informations :
	 * 	- documentation : (out) Checkout complete.
	 * @return string 'CheckoutComplete'
	 */
	const VALUE_CHECKOUTCOMPLETE = 'CheckoutComplete';
	/**
	 * Constant for value 'CheckoutIncomplete'
	 * Meta informations :
	 * 	- documentation : (out) Checkout incomplete.
	 * @return string 'CheckoutIncomplete'
	 */
	const VALUE_CHECKOUTINCOMPLETE = 'CheckoutIncomplete';
	/**
	 * Constant for value 'BuyerRequestsTotal'
	 * Meta informations :
	 * 	- documentation : (out) Buyer requests total from seller.
	 * @return string 'BuyerRequestsTotal'
	 */
	const VALUE_BUYERREQUESTSTOTAL = 'BuyerRequestsTotal';
	/**
	 * Constant for value 'SellerResponded'
	 * Meta informations :
	 * 	- documentation : (out) Seller responded to buyer's request.
	 * @return string 'SellerResponded'
	 */
	const VALUE_SELLERRESPONDED = 'SellerResponded';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : (out) Reserved for future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypeCheckoutStatusCodeType
	 */
	public function __construct()
	{
		parent::__construct(array());
	}
	/**
	 * Return true if value is allowed
	 * @param string value
	 * @return bool true|false
	 */
	public static function valueIsValid($_value)
	{
		return in_array($_value,array(self::VALUE_CHECKOUTCOMPLETE,self::VALUE_CHECKOUTINCOMPLETE,self::VALUE_BUYERREQUESTSTOTAL,self::VALUE_SELLERRESPONDED,self::VALUE_CUSTOMCODE));
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