<?php
/**
 * Class file for RFWeatherForecastTypeArrayOfstring
 * @date 15/08/2012
 */
/**
 * Class RFWeatherForecastTypeArrayOfstring
 * @date 15/08/2012
 */
class RFWeatherForecastTypeArrayOfstring extends RFWeatherForecastWsdlClass
{
	/**
	 * The string
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var string
	 */
	public $string;
	/**
	 * Constructor
	 * @param string string
	 * @return RFWeatherForecastTypeArrayOfstring
	 */
	public function __construct($_string = null)
	{
		parent::__construct(array('string'=>$_string));
	}
	/**
	 * Set string
	 * @param string string
	 * @return string
	 */
	public function setString($_string)
	{
		return ($this->string = $_string);
	}
	/**
	 * Get string
	 * @return string
	 */
	public function getString()
	{
		return $this->string;
	}
	/**
	 * Returns the current element
	 * @see RFWeatherForecastWsdlClass::current()
	 * @return string
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see RFWeatherForecastWsdlClass::item()
	 * @param int
	 * @return string
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see RFWeatherForecastWsdlClass::first()
	 * @return string
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see RFWeatherForecastWsdlClass::last()
	 * @return string
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see RFWeatherForecastWsdlClass::offsetGet()
	 * @param int
	 * @return string
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'string'
	 */
	public function getAttributeName()
	{
		return 'string';
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