<?php
/**
 * Class file for XiFundamentalsTypeGetFundamentalListAsString
 * @date 08/07/2012
 */
/**
 * Class XiFundamentalsTypeGetFundamentalListAsString
 * @date 08/07/2012
 */
class XiFundamentalsTypeGetFundamentalListAsString extends XiFundamentalsWsdlClass
{
	/**
	 * The Types
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Types;
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
	 * @var XiFundamentalsTypeIdentifierTypes
	 */
	public $IdentifierType;
	/**
	 * Constructor
	 * @param string Types
	 * @param string Identifier
	 * @param XiFundamentalsTypeIdentifierTypes IdentifierType
	 * @return XiFundamentalsTypeGetFundamentalListAsString
	 */
	public function __construct($_Types = null,$_Identifier = null,$_IdentifierType)
	{
		parent::__construct(array('Types'=>$_Types,'Identifier'=>$_Identifier,'IdentifierType'=>$_IdentifierType));
	}
	/**
	 * Set Types
	 * @param string Types
	 * @return string
	 */
	public function setTypes($_Types)
	{
		return ($this->Types = $_Types);
	}
	/**
	 * Get Types
	 * @return string
	 */
	public function getTypes()
	{
		return $this->Types;
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
		return ($this->IdentifierType = XiFundamentalsTypeIdentifierTypes::valueIsValid($_IdentifierType)?$_IdentifierType:null);
	}
	/**
	 * Get IdentifierType
	 * @return XiFundamentalsTypeIdentifierTypes
	 */
	public function getIdentifierType()
	{
		return $this->IdentifierType;
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