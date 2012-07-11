<?php
/**
 * Class file for XiOFACTypeSearchByAddress
 * @date 08/07/2012
 */
/**
 * Class XiOFACTypeSearchByAddress
 * @date 08/07/2012
 */
class XiOFACTypeSearchByAddress extends XiOFACWsdlClass
{
	/**
	 * The Type
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiOFACTypeOFACTypes
	 */
	public $Type;
	/**
	 * The Address
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Address;
	/**
	 * The City
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $City;
	/**
	 * The Country
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Country;
	/**
	 * The SearchType
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiOFACTypeSearchTypes
	 */
	public $SearchType;
	/**
	 * Constructor
	 * @param XiOFACTypeOFACTypes Type
	 * @param string Address
	 * @param string City
	 * @param string Country
	 * @param XiOFACTypeSearchTypes SearchType
	 * @return XiOFACTypeSearchByAddress
	 */
	public function __construct($_Type,$_Address = null,$_City = null,$_Country = null,$_SearchType)
	{
		parent::__construct(array('Type'=>$_Type,'Address'=>$_Address,'City'=>$_City,'Country'=>$_Country,'SearchType'=>$_SearchType));
	}
	/**
	 * Set Type
	 * @param OFACTypes Type
	 * @return OFACTypes
	 */
	public function setType($_Type)
	{
		return ($this->Type = XiOFACTypeOFACTypes::valueIsValid($_Type)?$_Type:null);
	}
	/**
	 * Get Type
	 * @return XiOFACTypeOFACTypes
	 */
	public function getType()
	{
		return $this->Type;
	}
	/**
	 * Set Address
	 * @param string Address
	 * @return string
	 */
	public function setAddress($_Address)
	{
		return ($this->Address = $_Address);
	}
	/**
	 * Get Address
	 * @return string
	 */
	public function getAddress()
	{
		return $this->Address;
	}
	/**
	 * Set City
	 * @param string City
	 * @return string
	 */
	public function setCity($_City)
	{
		return ($this->City = $_City);
	}
	/**
	 * Get City
	 * @return string
	 */
	public function getCity()
	{
		return $this->City;
	}
	/**
	 * Set Country
	 * @param string Country
	 * @return string
	 */
	public function setCountry($_Country)
	{
		return ($this->Country = $_Country);
	}
	/**
	 * Get Country
	 * @return string
	 */
	public function getCountry()
	{
		return $this->Country;
	}
	/**
	 * Set SearchType
	 * @param SearchTypes SearchType
	 * @return SearchTypes
	 */
	public function setSearchType($_SearchType)
	{
		return ($this->SearchType = XiOFACTypeSearchTypes::valueIsValid($_SearchType)?$_SearchType:null);
	}
	/**
	 * Get SearchType
	 * @return XiOFACTypeSearchTypes
	 */
	public function getSearchType()
	{
		return $this->SearchType;
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