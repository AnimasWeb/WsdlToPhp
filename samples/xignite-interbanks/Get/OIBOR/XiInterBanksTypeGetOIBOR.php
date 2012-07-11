<?php
/**
 * Class file for XiInterBanksTypeGetOIBOR
 * @date 08/07/2012
 */
/**
 * Class XiInterBanksTypeGetOIBOR
 * @date 08/07/2012
 */
class XiInterBanksTypeGetOIBOR extends XiInterBanksWsdlClass
{
	/**
	 * The Type
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiInterBanksTypeOIBORTypes
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
	 * @param XiInterBanksTypeOIBORTypes Type
	 * @param string AsOfDate
	 * @return XiInterBanksTypeGetOIBOR
	 */
	public function __construct($_Type,$_AsOfDate = null)
	{
		parent::__construct(array('Type'=>$_Type,'AsOfDate'=>$_AsOfDate));
	}
	/**
	 * Set Type
	 * @param OIBORTypes Type
	 * @return OIBORTypes
	 */
	public function setType($_Type)
	{
		return ($this->Type = XiInterBanksTypeOIBORTypes::valueIsValid($_Type)?$_Type:null);
	}
	/**
	 * Get Type
	 * @return XiInterBanksTypeOIBORTypes
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