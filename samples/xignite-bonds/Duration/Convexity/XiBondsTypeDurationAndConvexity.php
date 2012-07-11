<?php
/**
 * Class file for XiBondsTypeDurationAndConvexity
 * @date 08/07/2012
 */
/**
 * Class XiBondsTypeDurationAndConvexity
 * @date 08/07/2012
 */
class XiBondsTypeDurationAndConvexity extends XiBondsTypeCommon
{
	/**
	 * The InstrumentIdentifierBrief
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiBondsTypeInstrumentIdentifierBrief
	 */
	public $InstrumentIdentifierBrief;
	/**
	 * The BondDuration
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiBondsTypeBondDuration
	 */
	public $BondDuration;
	/**
	 * The BondConvexity
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiBondsTypeBondConvexity
	 */
	public $BondConvexity;
	/**
	 * Constructor
	 * @param XiBondsTypeInstrumentIdentifierBrief InstrumentIdentifierBrief
	 * @param XiBondsTypeBondDuration BondDuration
	 * @param XiBondsTypeBondConvexity BondConvexity
	 * @return XiBondsTypeDurationAndConvexity
	 */
	public function __construct($_InstrumentIdentifierBrief = null,$_BondDuration = null,$_BondConvexity = null)
	{
		XiBondsWsdlClass::__construct(array('InstrumentIdentifierBrief'=>$_InstrumentIdentifierBrief,'BondDuration'=>$_BondDuration,'BondConvexity'=>$_BondConvexity));
	}
	/**
	 * Set InstrumentIdentifierBrief
	 * @param InstrumentIdentifierBrief InstrumentIdentifierBrief
	 * @return InstrumentIdentifierBrief
	 */
	public function setInstrumentIdentifierBrief($_InstrumentIdentifierBrief)
	{
		return ($this->InstrumentIdentifierBrief = $_InstrumentIdentifierBrief);
	}
	/**
	 * Get InstrumentIdentifierBrief
	 * @return XiBondsTypeInstrumentIdentifierBrief
	 */
	public function getInstrumentIdentifierBrief()
	{
		return $this->InstrumentIdentifierBrief;
	}
	/**
	 * Set BondDuration
	 * @param BondDuration BondDuration
	 * @return BondDuration
	 */
	public function setBondDuration($_BondDuration)
	{
		return ($this->BondDuration = $_BondDuration);
	}
	/**
	 * Get BondDuration
	 * @return XiBondsTypeBondDuration
	 */
	public function getBondDuration()
	{
		return $this->BondDuration;
	}
	/**
	 * Set BondConvexity
	 * @param BondConvexity BondConvexity
	 * @return BondConvexity
	 */
	public function setBondConvexity($_BondConvexity)
	{
		return ($this->BondConvexity = $_BondConvexity);
	}
	/**
	 * Get BondConvexity
	 * @return XiBondsTypeBondConvexity
	 */
	public function getBondConvexity()
	{
		return $this->BondConvexity;
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