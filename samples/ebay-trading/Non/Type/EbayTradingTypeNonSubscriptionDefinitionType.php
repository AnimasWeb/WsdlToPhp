<?php
/**
 * Class file for EbayTradingTypeNonSubscriptionDefinitionType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeNonSubscriptionDefinitionType
 * Documentation : This is for FSBO. Each of the subscriptions will have following options, which will define "National" vs "Local" ad format listing. "LocalOptional" : This will allow national and local listing. "LocalOnly" : Seller can have Local listings only. "NationalOnly" : Seller can not opt into local only exposure. It has to be national listing.
 * @date 04/07/2012
 */
class EbayTradingTypeNonSubscriptionDefinitionType extends EbayTradingWsdlClass
{
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param DOMDocument any
	 * @return EbayTradingTypeNonSubscriptionDefinitionType
	 */
	public function __construct($_any = null)
	{
		parent::__construct(array('any'=>$_any));
	}
	/**
	 * Set any
	 * @param DOMDocument any
	 * @return DOMDocument
	 */
	public function setAny($_any)
	{
		return ($this->any = $_any);
	}
	/**
	 * Get any
	 * @return DOMDocument
	 */
	public function getAny()
	{
		if(!($this->any instanceof DOMDocument))
		{
			$dom = new DOMDocument('1.0','UTF-8');
			$dom->formatOutput = true;
			$dom->loadXML($this->any);
			$this->setAny($dom);
		}
		return $this->any;
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