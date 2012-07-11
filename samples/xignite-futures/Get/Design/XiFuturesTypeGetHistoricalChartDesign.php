<?php
/**
 * Class file for XiFuturesTypeGetHistoricalChartDesign
 * @date 08/07/2012
 */
/**
 * Class XiFuturesTypeGetHistoricalChartDesign
 * @date 08/07/2012
 */
class XiFuturesTypeGetHistoricalChartDesign extends XiFuturesWsdlClass
{
	/**
	 * The Preset
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Preset;
	/**
	 * Constructor
	 * @param string Preset
	 * @return XiFuturesTypeGetHistoricalChartDesign
	 */
	public function __construct($_Preset = null)
	{
		parent::__construct(array('Preset'=>$_Preset));
	}
	/**
	 * Set Preset
	 * @param string Preset
	 * @return string
	 */
	public function setPreset($_Preset)
	{
		return ($this->Preset = $_Preset);
	}
	/**
	 * Get Preset
	 * @return string
	 */
	public function getPreset()
	{
		return $this->Preset;
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