<?php
/**
 * Class file for XiEnergyTypeGetHistoricalEnergyFutureChartCustom
 * @date 08/07/2012
 */
/**
 * Class XiEnergyTypeGetHistoricalEnergyFutureChartCustom
 * @date 08/07/2012
 */
class XiEnergyTypeGetHistoricalEnergyFutureChartCustom extends XiEnergyWsdlClass
{
	/**
	 * The Symbol
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Symbol;
	/**
	 * The Month
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $Month;
	/**
	 * The Year
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $Year;
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
	 * The Style
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiEnergyTypeStockChartStyles
	 */
	public $Style;
	/**
	 * The Width
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $Width;
	/**
	 * The Height
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $Height;
	/**
	 * The Design
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiEnergyTypeChartDesign
	 */
	public $Design;
	/**
	 * Constructor
	 * @param string Symbol
	 * @param int Month
	 * @param int Year
	 * @param string StartDate
	 * @param string EndDate
	 * @param XiEnergyTypeStockChartStyles Style
	 * @param int Width
	 * @param int Height
	 * @param XiEnergyTypeChartDesign Design
	 * @return XiEnergyTypeGetHistoricalEnergyFutureChartCustom
	 */
	public function __construct($_Symbol = null,$_Month,$_Year,$_StartDate = null,$_EndDate = null,$_Style,$_Width,$_Height,$_Design = null)
	{
		parent::__construct(array('Symbol'=>$_Symbol,'Month'=>$_Month,'Year'=>$_Year,'StartDate'=>$_StartDate,'EndDate'=>$_EndDate,'Style'=>$_Style,'Width'=>$_Width,'Height'=>$_Height,'Design'=>$_Design));
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
	 * Set Month
	 * @param int Month
	 * @return int
	 */
	public function setMonth($_Month)
	{
		return ($this->Month = $_Month);
	}
	/**
	 * Get Month
	 * @return int
	 */
	public function getMonth()
	{
		return $this->Month;
	}
	/**
	 * Set Year
	 * @param int Year
	 * @return int
	 */
	public function setYear($_Year)
	{
		return ($this->Year = $_Year);
	}
	/**
	 * Get Year
	 * @return int
	 */
	public function getYear()
	{
		return $this->Year;
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
	 * Set Style
	 * @param StockChartStyles Style
	 * @return StockChartStyles
	 */
	public function setStyle($_Style)
	{
		return ($this->Style = XiEnergyTypeStockChartStyles::valueIsValid($_Style)?$_Style:null);
	}
	/**
	 * Get Style
	 * @return XiEnergyTypeStockChartStyles
	 */
	public function getStyle()
	{
		return $this->Style;
	}
	/**
	 * Set Width
	 * @param int Width
	 * @return int
	 */
	public function setWidth($_Width)
	{
		return ($this->Width = $_Width);
	}
	/**
	 * Get Width
	 * @return int
	 */
	public function getWidth()
	{
		return $this->Width;
	}
	/**
	 * Set Height
	 * @param int Height
	 * @return int
	 */
	public function setHeight($_Height)
	{
		return ($this->Height = $_Height);
	}
	/**
	 * Get Height
	 * @return int
	 */
	public function getHeight()
	{
		return $this->Height;
	}
	/**
	 * Set Design
	 * @param ChartDesign Design
	 * @return ChartDesign
	 */
	public function setDesign($_Design)
	{
		return ($this->Design = $_Design);
	}
	/**
	 * Get Design
	 * @return XiEnergyTypeChartDesign
	 */
	public function getDesign()
	{
		return $this->Design;
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