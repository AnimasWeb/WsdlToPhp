<?php
/**
 * Class file for SOPhoneExchangeTypeGetExchangeInfo
 * @date 08/07/2012
 */
/**
 * Class SOPhoneExchangeTypeGetExchangeInfo
 * @date 08/07/2012
 */
class SOPhoneExchangeTypeGetExchangeInfo extends SOPhoneExchangeWsdlClass
{
	/**
	 * The PhoneNumbers
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $PhoneNumbers;
	/**
	 * The LicenseKey
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $LicenseKey;
	/**
	 * Constructor
	 * @param string PhoneNumbers
	 * @param string LicenseKey
	 * @return SOPhoneExchangeTypeGetExchangeInfo
	 */
	public function __construct($_PhoneNumbers = null,$_LicenseKey = null)
	{
		parent::__construct(array('PhoneNumbers'=>$_PhoneNumbers,'LicenseKey'=>$_LicenseKey));
	}
	/**
	 * Set PhoneNumbers
	 * @param string PhoneNumbers
	 * @return string
	 */
	public function setPhoneNumbers($_PhoneNumbers)
	{
		return ($this->PhoneNumbers = $_PhoneNumbers);
	}
	/**
	 * Get PhoneNumbers
	 * @return string
	 */
	public function getPhoneNumbers()
	{
		return $this->PhoneNumbers;
	}
	/**
	 * Set LicenseKey
	 * @param string LicenseKey
	 * @return string
	 */
	public function setLicenseKey($_LicenseKey)
	{
		return ($this->LicenseKey = $_LicenseKey);
	}
	/**
	 * Get LicenseKey
	 * @return string
	 */
	public function getLicenseKey()
	{
		return $this->LicenseKey;
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