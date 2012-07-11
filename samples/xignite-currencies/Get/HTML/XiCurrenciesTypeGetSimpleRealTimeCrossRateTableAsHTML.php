<?php
/**
 * Class file for XiCurrenciesTypeGetSimpleRealTimeCrossRateTableAsHTML
 * @date 08/07/2012
 */
/**
 * Class XiCurrenciesTypeGetSimpleRealTimeCrossRateTableAsHTML
 * @date 08/07/2012
 */
class XiCurrenciesTypeGetSimpleRealTimeCrossRateTableAsHTML extends XiCurrenciesWsdlClass
{
	/**
	 * The Symbols
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Symbols;
	/**
	 * The ColumnHeaderStyle
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ColumnHeaderStyle;
	/**
	 * The LineHeaderStyle
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $LineHeaderStyle;
	/**
	 * The CellStyle
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $CellStyle;
	/**
	 * Constructor
	 * @param string Symbols
	 * @param string ColumnHeaderStyle
	 * @param string LineHeaderStyle
	 * @param string CellStyle
	 * @return XiCurrenciesTypeGetSimpleRealTimeCrossRateTableAsHTML
	 */
	public function __construct($_Symbols = null,$_ColumnHeaderStyle = null,$_LineHeaderStyle = null,$_CellStyle = null)
	{
		parent::__construct(array('Symbols'=>$_Symbols,'ColumnHeaderStyle'=>$_ColumnHeaderStyle,'LineHeaderStyle'=>$_LineHeaderStyle,'CellStyle'=>$_CellStyle));
	}
	/**
	 * Set Symbols
	 * @param string Symbols
	 * @return string
	 */
	public function setSymbols($_Symbols)
	{
		return ($this->Symbols = $_Symbols);
	}
	/**
	 * Get Symbols
	 * @return string
	 */
	public function getSymbols()
	{
		return $this->Symbols;
	}
	/**
	 * Set ColumnHeaderStyle
	 * @param string ColumnHeaderStyle
	 * @return string
	 */
	public function setColumnHeaderStyle($_ColumnHeaderStyle)
	{
		return ($this->ColumnHeaderStyle = $_ColumnHeaderStyle);
	}
	/**
	 * Get ColumnHeaderStyle
	 * @return string
	 */
	public function getColumnHeaderStyle()
	{
		return $this->ColumnHeaderStyle;
	}
	/**
	 * Set LineHeaderStyle
	 * @param string LineHeaderStyle
	 * @return string
	 */
	public function setLineHeaderStyle($_LineHeaderStyle)
	{
		return ($this->LineHeaderStyle = $_LineHeaderStyle);
	}
	/**
	 * Get LineHeaderStyle
	 * @return string
	 */
	public function getLineHeaderStyle()
	{
		return $this->LineHeaderStyle;
	}
	/**
	 * Set CellStyle
	 * @param string CellStyle
	 * @return string
	 */
	public function setCellStyle($_CellStyle)
	{
		return ($this->CellStyle = $_CellStyle);
	}
	/**
	 * Get CellStyle
	 * @return string
	 */
	public function getCellStyle()
	{
		return $this->CellStyle;
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