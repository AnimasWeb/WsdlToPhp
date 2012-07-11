<?php
/**
 * Class file for XiHistoricalTypeExtendedDividend
 * @date 08/07/2012
 */
/**
 * Class XiHistoricalTypeExtendedDividend
 * @date 08/07/2012
 */
class XiHistoricalTypeExtendedDividend extends XiHistoricalWsdlClass
{
	/**
	 * The Symbol
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Symbol;
	/**
	 * The ExDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ExDate;
	/**
	 * The RecordDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $RecordDate;
	/**
	 * The PayDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $PayDate;
	/**
	 * The Amount
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $Amount;
	/**
	 * The Yield
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $Yield;
	/**
	 * Constructor
	 * @param string Symbol
	 * @param string ExDate
	 * @param string RecordDate
	 * @param string PayDate
	 * @param double Amount
	 * @param double Yield
	 * @return XiHistoricalTypeExtendedDividend
	 */
	public function __construct($_Symbol = null,$_ExDate = null,$_RecordDate = null,$_PayDate = null,$_Amount,$_Yield)
	{
		parent::__construct(array('Symbol'=>$_Symbol,'ExDate'=>$_ExDate,'RecordDate'=>$_RecordDate,'PayDate'=>$_PayDate,'Amount'=>$_Amount,'Yield'=>$_Yield));
	}
	/**
	 * Set Symbol
	 * @param string Symbol
	 * @return string
	 */
	public function setSymbol($_Symbol)
	{
		return ($this->Symbol = $_Symbol);
	}
	/**
	 * Get Symbol
	 * @return string
	 */
	public function getSymbol()
	{
		return $this->Symbol;
	}
	/**
	 * Set ExDate
	 * @param string ExDate
	 * @return string
	 */
	public function setExDate($_ExDate)
	{
		return ($this->ExDate = $_ExDate);
	}
	/**
	 * Get ExDate
	 * @return string
	 */
	public function getExDate()
	{
		return $this->ExDate;
	}
	/**
	 * Set RecordDate
	 * @param string RecordDate
	 * @return string
	 */
	public function setRecordDate($_RecordDate)
	{
		return ($this->RecordDate = $_RecordDate);
	}
	/**
	 * Get RecordDate
	 * @return string
	 */
	public function getRecordDate()
	{
		return $this->RecordDate;
	}
	/**
	 * Set PayDate
	 * @param string PayDate
	 * @return string
	 */
	public function setPayDate($_PayDate)
	{
		return ($this->PayDate = $_PayDate);
	}
	/**
	 * Get PayDate
	 * @return string
	 */
	public function getPayDate()
	{
		return $this->PayDate;
	}
	/**
	 * Set Amount
	 * @param double Amount
	 * @return double
	 */
	public function setAmount($_Amount)
	{
		return ($this->Amount = $_Amount);
	}
	/**
	 * Get Amount
	 * @return double
	 */
	public function getAmount()
	{
		return $this->Amount;
	}
	/**
	 * Set Yield
	 * @param double Yield
	 * @return double
	 */
	public function setYield($_Yield)
	{
		return ($this->Yield = $_Yield);
	}
	/**
	 * Get Yield
	 * @return double
	 */
	public function getYield()
	{
		return $this->Yield;
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