<?php
/**
 * Class file for XiRatesTypeGetVILIBOR
 * @date 08/07/2012
 */
/**
 * Class XiRatesTypeGetVILIBOR
 * @date 08/07/2012
 */
class XiRatesTypeGetVILIBOR extends XiRatesWsdlClass
{
	/**
	 * The Type
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiRatesTypeVILIBORTypes
	 */
	public $Type;
	/**
	 * The AsOfDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $AsOfDate;
	/**
	 * Constructor
	 * @param XiRatesTypeVILIBORTypes Type
	 * @param string AsOfDate
	 * @return XiRatesTypeGetVILIBOR
	 */
	public function __construct($_Type,$_AsOfDate = null)
	{
		parent::__construct(array('Type'=>$_Type,'AsOfDate'=>$_AsOfDate));
	}
	/**
	 * Set Type
	 * @param VILIBORTypes Type
	 * @return VILIBORTypes
	 */
	public function setType($_Type)
	{
		return ($this->Type = XiRatesTypeVILIBORTypes::valueIsValid($_Type)?$_Type:null);
	}
	/**
	 * Get Type
	 * @return XiRatesTypeVILIBORTypes
	 */
	public function getType()
	{
		return $this->Type;
	}
	/**
	 * Set AsOfDate
	 * @param string AsOfDate
	 * @return string
	 */
	public function setAsOfDate($_AsOfDate)
	{
		return ($this->AsOfDate = $_AsOfDate);
	}
	/**
	 * Get AsOfDate
	 * @return string
	 */
	public function getAsOfDate()
	{
		return $this->AsOfDate;
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