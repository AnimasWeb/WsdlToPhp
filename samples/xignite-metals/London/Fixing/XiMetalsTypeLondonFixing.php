<?php
/**
 * Class file for XiMetalsTypeLondonFixing
 * @date 08/07/2012
 */
/**
 * Class XiMetalsTypeLondonFixing
 * @date 08/07/2012
 */
class XiMetalsTypeLondonFixing extends XiMetalsTypeCommon
{
	/**
	 * The Type
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiMetalsTypeFixingTypes
	 */
	public $Type;
	/**
	 * The Symbol
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Symbol;
	/**
	 * The Currency
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiMetalsTypeFixingCurrencyTypes
	 */
	public $Currency;
	/**
	 * The Period
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiMetalsTypePeriodType
	 */
	public $Period;
	/**
	 * The Date
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Date;
	/**
	 * The Value
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $Value;
	/**
	 * The Text
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Text;
	/**
	 * The Unit
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Unit;
	/**
	 * The Source
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Source;
	/**
	 * Constructor
	 * @param XiMetalsTypeFixingTypes Type
	 * @param string Symbol
	 * @param XiMetalsTypeFixingCurrencyTypes Currency
	 * @param XiMetalsTypePeriodType Period
	 * @param string Date
	 * @param double Value
	 * @param string Text
	 * @param string Unit
	 * @param string Source
	 * @return XiMetalsTypeLondonFixing
	 */
	public function __construct($_Type,$_Symbol = null,$_Currency,$_Period,$_Date = null,$_Value,$_Text = null,$_Unit = null,$_Source = null)
	{
		XiMetalsWsdlClass::__construct(array('Type'=>$_Type,'Symbol'=>$_Symbol,'Currency'=>$_Currency,'Period'=>$_Period,'Date'=>$_Date,'Value'=>$_Value,'Text'=>$_Text,'Unit'=>$_Unit,'Source'=>$_Source));
	}
	/**
	 * Set Type
	 * @param FixingTypes Type
	 * @return FixingTypes
	 */
	public function setType($_Type)
	{
		return ($this->Type = XiMetalsTypeFixingTypes::valueIsValid($_Type)?$_Type:null);
	}
	/**
	 * Get Type
	 * @return XiMetalsTypeFixingTypes
	 */
	public function getType()
	{
		return $this->Type;
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
	 * Set Currency
	 * @param FixingCurrencyTypes Currency
	 * @return FixingCurrencyTypes
	 */
	public function setCurrency($_Currency)
	{
		return ($this->Currency = XiMetalsTypeFixingCurrencyTypes::valueIsValid($_Currency)?$_Currency:null);
	}
	/**
	 * Get Currency
	 * @return XiMetalsTypeFixingCurrencyTypes
	 */
	public function getCurrency()
	{
		return $this->Currency;
	}
	/**
	 * Set Period
	 * @param PeriodType Period
	 * @return PeriodType
	 */
	public function setPeriod($_Period)
	{
		return ($this->Period = XiMetalsTypePeriodType::valueIsValid($_Period)?$_Period:null);
	}
	/**
	 * Get Period
	 * @return XiMetalsTypePeriodType
	 */
	public function getPeriod()
	{
		return $this->Period;
	}
	/**
	 * Set Date
	 * @param string Date
	 * @return string
	 */
	public function setDate($_Date)
	{
		return ($this->Date = $_Date);
	}
	/**
	 * Get Date
	 * @return string
	 */
	public function getDate()
	{
		return $this->Date;
	}
	/**
	 * Set Value
	 * @param double Value
	 * @return double
	 */
	public function setValue($_Value)
	{
		return ($this->Value = $_Value);
	}
	/**
	 * Get Value
	 * @return double
	 */
	public function getValue()
	{
		return $this->Value;
	}
	/**
	 * Set Text
	 * @param string Text
	 * @return string
	 */
	public function setText($_Text)
	{
		return ($this->Text = $_Text);
	}
	/**
	 * Get Text
	 * @return string
	 */
	public function getText()
	{
		return $this->Text;
	}
	/**
	 * Set Unit
	 * @param string Unit
	 * @return string
	 */
	public function setUnit($_Unit)
	{
		return ($this->Unit = $_Unit);
	}
	/**
	 * Get Unit
	 * @return string
	 */
	public function getUnit()
	{
		return $this->Unit;
	}
	/**
	 * Set Source
	 * @param string Source
	 * @return string
	 */
	public function setSource($_Source)
	{
		return ($this->Source = $_Source);
	}
	/**
	 * Get Source
	 * @return string
	 */
	public function getSource()
	{
		return $this->Source;
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