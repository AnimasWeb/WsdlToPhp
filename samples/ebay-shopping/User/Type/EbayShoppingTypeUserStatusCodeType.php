<?php
/**
 * Class file for EbayShoppingTypeUserStatusCodeType
 * @date 05/07/2012
 */
/**
 * Class EbayShoppingTypeUserStatusCodeType
 * @date 05/07/2012
 */
class EbayShoppingTypeUserStatusCodeType extends EbayShoppingWsdlClass
{
	/**
	 * Constant for value 'Unknown'
	 * Meta informations :
	 * 	- documentation : (out) User properties have never been set; this value should seldom, if ever, be returned and typically represents a problem
	 * @return string 'Unknown'
	 */
	const VALUE_UNKNOWN = 'Unknown';
	/**
	 * Constant for value 'Suspended'
	 * Meta informations :
	 * 	- documentation : (out) User has been suspended from selling and buying, such as for violations of eBay terms or agreement
	 * @return string 'Suspended'
	 */
	const VALUE_SUSPENDED = 'Suspended';
	/**
	 * Constant for value 'Confirmed'
	 * Meta informations :
	 * 	- documentation : (out) User has completed online registration and has properly responded to confirmation email; most users should fall in this category
	 * @return string 'Confirmed'
	 */
	const VALUE_CONFIRMED = 'Confirmed';
	/**
	 * Constant for value 'Unconfirmed'
	 * Meta informations :
	 * 	- documentation : (out) User has completed online registration, but has either not responded to confirmation email or has not yet been sent the confirmation email
	 * @return string 'Unconfirmed'
	 */
	const VALUE_UNCONFIRMED = 'Unconfirmed';
	/**
	 * Constant for value 'Ghost'
	 * Meta informations :
	 * 	- documentation : (out) Registered users of AuctionWeb (pre-eBay) who never re-registered on eBay
	 * @return string 'Ghost'
	 */
	const VALUE_GHOST = 'Ghost';
	/**
	 * Constant for value 'InMaintenance'
	 * Meta informations :
	 * 	- documentation : (out) Temporary user record state indicating the record is in the process of being changed by eBay; query user information again to get new status
	 * @return string 'InMaintenance'
	 */
	const VALUE_INMAINTENANCE = 'InMaintenance';
	/**
	 * Constant for value 'Deleted'
	 * Meta informations :
	 * 	- documentation : (out) Records for the specified user have been deleted
	 * @return string 'Deleted'
	 */
	const VALUE_DELETED = 'Deleted';
	/**
	 * Constant for value 'CreditCardVerify'
	 * Meta informations :
	 * 	- documentation : (out) User has completed registration and confirmation, but is pending a verification of credit card information
	 * @return string 'CreditCardVerify'
	 */
	const VALUE_CREDITCARDVERIFY = 'CreditCardVerify';
	/**
	 * Constant for value 'AccountOnHold'
	 * Meta informations :
	 * 	- documentation : (out) User's account is on hold, such as for non-payment of amounts due eBay; user cannot sell or buy items
	 * @return string 'AccountOnHold'
	 */
	const VALUE_ACCOUNTONHOLD = 'AccountOnHold';
	/**
	 * Constant for value 'Merged'
	 * Meta informations :
	 * 	- documentation : (out) User record has been merged with another account record for the same user
	 * @return string 'Merged'
	 */
	const VALUE_MERGED = 'Merged';
	/**
	 * Constant for value 'RegistrationCodeMailOut'
	 * Meta informations :
	 * 	- documentation : (out) User has completed online registration and has been sent the confirmation email, but has not yet responded to the confirmation email
	 * @return string 'RegistrationCodeMailOut'
	 */
	const VALUE_REGISTRATIONCODEMAILOUT = 'RegistrationCodeMailOut';
	/**
	 * Constant for value 'TermPending'
	 * Meta informations :
	 * 	- documentation : (out) User has been scheduled for account closure (typically when a user has requested to have their account closed) A user in this state should not be considered an active user
	 * @return string 'TermPending'
	 */
	const VALUE_TERMPENDING = 'TermPending';
	/**
	 * Constant for value 'UnconfirmedHalfOptIn'
	 * Meta informations :
	 * 	- documentation : (out) User has completed the registration for Half.com and opted to automatically also be registered with eBay, but the registration confirmation is still pending
	 * @return string 'UnconfirmedHalfOptIn'
	 */
	const VALUE_UNCONFIRMEDHALFOPTIN = 'UnconfirmedHalfOptIn';
	/**
	 * Constant for value 'CreditCardVerifyHalfOptIn'
	 * Meta informations :
	 * 	- documentation : (out) User has completed the registration for Half.com and opted to automatically also be registered with eBay, but the verification of credit card information is still pending
	 * @return string 'CreditCardVerifyHalfOptIn'
	 */
	const VALUE_CREDITCARDVERIFYHALFOPTIN = 'CreditCardVerifyHalfOptIn';
	/**
	 * Constant for value 'UnconfirmedExpress'
	 * Meta informations :
	 * 	- documentation : (out) Half.com User; user has completed the registration for Half.com and opted to automatically also be registered with eBay, but the registration confirmation is still pending
	 * @return string 'UnconfirmedExpress'
	 */
	const VALUE_UNCONFIRMEDEXPRESS = 'UnconfirmedExpress';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : (out) Reserved for internal or future use
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayShoppingTypeUserStatusCodeType
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
		return in_array($_value,array(self::VALUE_UNKNOWN,self::VALUE_SUSPENDED,self::VALUE_CONFIRMED,self::VALUE_UNCONFIRMED,self::VALUE_GHOST,self::VALUE_INMAINTENANCE,self::VALUE_DELETED,self::VALUE_CREDITCARDVERIFY,self::VALUE_ACCOUNTONHOLD,self::VALUE_MERGED,self::VALUE_REGISTRATIONCODEMAILOUT,self::VALUE_TERMPENDING,self::VALUE_UNCONFIRMEDHALFOPTIN,self::VALUE_CREDITCARDVERIFYHALFOPTIN,self::VALUE_UNCONFIRMEDEXPRESS,self::VALUE_CUSTOMCODE));
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