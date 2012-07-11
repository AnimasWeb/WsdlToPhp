<?php
/**
 * Class file for XiInterBanksTypeGetKIBOR
 * @date 08/07/2012
 */
/**
 * Class XiInterBanksTypeGetKIBOR
 * @date 08/07/2012
 */
class XiInterBanksTypeGetKIBOR extends XiInterBanksWsdlClass
{
	/**
	 * The Type
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiInterBanksTypeKIBORTypes
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
	 * @param XiInterBanksTypeKIBORTypes Type
	 * @param string AsOfDate
	 * @return XiInterBanksTypeGetKIBOR
	 */
	public function __construct($_Type,$_AsOfDate = null)
	{
		parent::__construct(array('Type'=>$_Type,'AsOfDate'=>$_AsOfDate));
	}
	/**
	 * Set Type
	 * @param KIBORTypes Type
	 * @return KIBORTypes
	 */
	public function setType($_Type)
	{
		return ($this->Type = XiInterBanksTypeKIBORTypes::valueIsValid($_Type)?$_Type:null);
	}
	/**
	 * Get Type
	 * @return XiInterBanksTypeKIBORTypes
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