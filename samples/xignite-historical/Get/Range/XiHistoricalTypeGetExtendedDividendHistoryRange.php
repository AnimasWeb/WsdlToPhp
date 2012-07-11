<?php
/**
 * Class file for XiHistoricalTypeGetExtendedDividendHistoryRange
 * @date 08/07/2012
 */
/**
 * Class XiHistoricalTypeGetExtendedDividendHistoryRange
 * @date 08/07/2012
 */
class XiHistoricalTypeGetExtendedDividendHistoryRange extends XiHistoricalWsdlClass
{
	/**
	 * The Identifier
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Identifier;
	/**
	 * The IdentifierType
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiHistoricalTypeIdentifierTypes
	 */
	public $IdentifierType;
	/**
	 * The QueryBy
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiHistoricalTypeQueryByTypes
	 */
	public $QueryBy;
	/**
	 * The StartDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $StartDate;
	/**
	 * The EndDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $EndDate;
	/**
	 * Constructor
	 * @param string Identifier
	 * @param XiHistoricalTypeIdentifierTypes IdentifierType
	 * @param XiHistoricalTypeQueryByTypes QueryBy
	 * @param string StartDate
	 * @param string EndDate
	 * @return XiHistoricalTypeGetExtendedDividendHistoryRange
	 */
	public function __construct($_Identifier = null,$_IdentifierType,$_QueryBy,$_StartDate = null,$_EndDate = null)
	{
		parent::__construct(array('Identifier'=>$_Identifier,'IdentifierType'=>$_IdentifierType,'QueryBy'=>$_QueryBy,'StartDate'=>$_StartDate,'EndDate'=>$_EndDate));
	}
	/**
	 * Set Identifier
	 * @param string Identifier
	 * @return string
	 */
	public function setIdentifier($_Identifier)
	{
		return ($this->Identifier = $_Identifier);
	}
	/**
	 * Get Identifier
	 * @return string
	 */
	public function getIdentifier()
	{
		return $this->Identifier;
	}
	/**
	 * Set IdentifierType
	 * @param IdentifierTypes IdentifierType
	 * @return IdentifierTypes
	 */
	public function setIdentifierType($_IdentifierType)
	{
		return ($this->IdentifierType = XiHistoricalTypeIdentifierTypes::valueIsValid($_IdentifierType)?$_IdentifierType:null);
	}
	/**
	 * Get IdentifierType
	 * @return XiHistoricalTypeIdentifierTypes
	 */
	public function getIdentifierType()
	{
		return $this->IdentifierType;
	}
	/**
	 * Set QueryBy
	 * @param QueryByTypes QueryBy
	 * @return QueryByTypes
	 */
	public function setQueryBy($_QueryBy)
	{
		return ($this->QueryBy = XiHistoricalTypeQueryByTypes::valueIsValid($_QueryBy)?$_QueryBy:null);
	}
	/**
	 * Get QueryBy
	 * @return XiHistoricalTypeQueryByTypes
	 */
	public function getQueryBy()
	{
		return $this->QueryBy;
	}
	/**
	 * Set StartDate
	 * @param string StartDate
	 * @return string
	 */
	public function setStartDate($_StartDate)
	{
		return ($this->StartDate = $_StartDate);
	}
	/**
	 * Get StartDate
	 * @return string
	 */
	public function getStartDate()
	{
		return $this->StartDate;
	}
	/**
	 * Set EndDate
	 * @param string EndDate
	 * @return string
	 */
	public function setEndDate($_EndDate)
	{
		return ($this->EndDate = $_EndDate);
	}
	/**
	 * Get EndDate
	 * @return string
	 */
	public function getEndDate()
	{
		return $this->EndDate;
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