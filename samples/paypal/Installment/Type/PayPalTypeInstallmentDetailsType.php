<?php
/**
 * Class file for PayPalTypeInstallmentDetailsType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeInstallmentDetailsType
 * @date 14/07/2012
 */
class PayPalTypeInstallmentDetailsType extends PayPalWsdlClass
{
	/**
	 * The BillingPeriod
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Installment Period. Optional
	 * @var PayPalTypeBillingPeriodType
	 */
	public $BillingPeriod;
	/**
	 * The BillingFrequency
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Installment Frequency. Optional
	 * @var int
	 */
	public $BillingFrequency;
	/**
	 * The TotalBillingCycles
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Installment Cycles. Optional
	 * @var int
	 */
	public $TotalBillingCycles;
	/**
	 * The Amount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Installment Amount. Optional
	 * @var string
	 */
	public $Amount;
	/**
	 * The ShippingAmount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Installment Amount. Optional
	 * @var string
	 */
	public $ShippingAmount;
	/**
	 * The TaxAmount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Installment Amount. Optional
	 * @var string
	 */
	public $TaxAmount;
	/**
	 * Constructor
	 * @param PayPalTypeBillingPeriodType BillingPeriod
	 * @param int BillingFrequency
	 * @param int TotalBillingCycles
	 * @param string Amount
	 * @param string ShippingAmount
	 * @param string TaxAmount
	 * @return PayPalTypeInstallmentDetailsType
	 */
	public function __construct($_BillingPeriod = null,$_BillingFrequency = null,$_TotalBillingCycles = null,$_Amount = null,$_ShippingAmount = null,$_TaxAmount = null)
	{
		parent::__construct(array('BillingPeriod'=>$_BillingPeriod,'BillingFrequency'=>$_BillingFrequency,'TotalBillingCycles'=>$_TotalBillingCycles,'Amount'=>$_Amount,'ShippingAmount'=>$_ShippingAmount,'TaxAmount'=>$_TaxAmount));
	}
	/**
	 * Set BillingPeriod
	 * @param BillingPeriodType BillingPeriod
	 * @return BillingPeriodType
	 */
	public function setBillingPeriod($_BillingPeriod)
	{
		return ($this->BillingPeriod = PayPalTypeBillingPeriodType::valueIsValid($_BillingPeriod)?$_BillingPeriod:null);
	}
	/**
	 * Get BillingPeriod
	 * @return PayPalTypeBillingPeriodType
	 */
	public function getBillingPeriod()
	{
		return $this->BillingPeriod;
	}
	/**
	 * Set BillingFrequency
	 * @param int BillingFrequency
	 * @return int
	 */
	public function setBillingFrequency($_BillingFrequency)
	{
		return ($this->BillingFrequency = $_BillingFrequency);
	}
	/**
	 * Get BillingFrequency
	 * @return int
	 */
	public function getBillingFrequency()
	{
		return $this->BillingFrequency;
	}
	/**
	 * Set TotalBillingCycles
	 * @param int TotalBillingCycles
	 * @return int
	 */
	public function setTotalBillingCycles($_TotalBillingCycles)
	{
		return ($this->TotalBillingCycles = $_TotalBillingCycles);
	}
	/**
	 * Get TotalBillingCycles
	 * @return int
	 */
	public function getTotalBillingCycles()
	{
		return $this->TotalBillingCycles;
	}
	/**
	 * Set Amount
	 * @param string Amount
	 * @return string
	 */
	public function setAmount($_Amount)
	{
		return ($this->Amount = $_Amount);
	}
	/**
	 * Get Amount
	 * @return string
	 */
	public function getAmount()
	{
		return $this->Amount;
	}
	/**
	 * Set ShippingAmount
	 * @param string ShippingAmount
	 * @return string
	 */
	public function setShippingAmount($_ShippingAmount)
	{
		return ($this->ShippingAmount = $_ShippingAmount);
	}
	/**
	 * Get ShippingAmount
	 * @return string
	 */
	public function getShippingAmount()
	{
		return $this->ShippingAmount;
	}
	/**
	 * Set TaxAmount
	 * @param string TaxAmount
	 * @return string
	 */
	public function setTaxAmount($_TaxAmount)
	{
		return ($this->TaxAmount = $_TaxAmount);
	}
	/**
	 * Get TaxAmount
	 * @return string
	 */
	public function getTaxAmount()
	{
		return $this->TaxAmount;
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