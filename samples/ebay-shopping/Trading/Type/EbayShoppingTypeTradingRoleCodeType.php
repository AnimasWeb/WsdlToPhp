<?php
/**
 * Class file for EbayShoppingTypeTradingRoleCodeType
 * @date 05/07/2012
 */
/**
 * Class EbayShoppingTypeTradingRoleCodeType
 * @date 05/07/2012
 */
class EbayShoppingTypeTradingRoleCodeType extends EbayShoppingWsdlClass
{
	/**
	 * Constant for value 'Buyer'
	 * Meta informations :
	 * 	- documentation : Acting as buyer.
	 * @return string 'Buyer'
	 */
	const VALUE_BUYER = 'Buyer';
	/**
	 * Constant for value 'Seller'
	 * Meta informations :
	 * 	- documentation : Acting as seller.
	 * @return string 'Seller'
	 */
	const VALUE_SELLER = 'Seller';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : Reserved for future use
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayShoppingTypeTradingRoleCodeType
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
		return in_array($_value,array(self::VALUE_BUYER,self::VALUE_SELLER,self::VALUE_CUSTOMCODE));
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