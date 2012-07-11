<?php
/**
 * Class file for XiGlobalFundamentalsTypeGetFiveFundamentalsResponse
 * @date 08/07/2012
 */
/**
 * Class XiGlobalFundamentalsTypeGetFiveFundamentalsResponse
 * @date 08/07/2012
 */
class XiGlobalFundamentalsTypeGetFiveFundamentalsResponse extends XiGlobalFundamentalsWsdlClass
{
	/**
	 * The GetFiveFundamentalsResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiGlobalFundamentalsTypeMultiFundamental
	 */
	public $GetFiveFundamentalsResult;
	/**
	 * Constructor
	 * @param XiGlobalFundamentalsTypeMultiFundamental GetFiveFundamentalsResult
	 * @return XiGlobalFundamentalsTypeGetFiveFundamentalsResponse
	 */
	public function __construct($_GetFiveFundamentalsResult = null)
	{
		parent::__construct(array('GetFiveFundamentalsResult'=>$_GetFiveFundamentalsResult));
	}
	/**
	 * Set GetFiveFundamentalsResult
	 * @param MultiFundamental GetFiveFundamentalsResult
	 * @return MultiFundamental
	 */
	public function setGetFiveFundamentalsResult($_GetFiveFundamentalsResult)
	{
		return ($this->GetFiveFundamentalsResult = $_GetFiveFundamentalsResult);
	}
	/**
	 * Get GetFiveFundamentalsResult
	 * @return XiGlobalFundamentalsTypeMultiFundamental
	 */
	public function getGetFiveFundamentalsResult()
	{
		return $this->GetFiveFundamentalsResult;
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