<?php
/**
 * Class file for EbayTradingTypeGetItemResponseType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeGetItemResponseType
 * Documentation : Contains the item data returned by the call. The data for the specified item listing is returned in an ItemType object.
 * @date 04/07/2012
 */
class EbayTradingTypeGetItemResponseType extends EbayTradingTypeAbstractResponseType
{
	/**
	 * The Item
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : ItemType object that contains the data for the specified item.
	 * @var EbayTradingTypeItemType
	 */
	public $Item;
	/**
	 * Constructor
	 * @param EbayTradingTypeItemType Item
	 * @return EbayTradingTypeGetItemResponseType
	 */
	public function __construct($_Item = null)
	{
		EbayTradingWsdlClass::__construct(array('Item'=>$_Item));
	}
	/**
	 * Set Item
	 * @param ItemType Item
	 * @return ItemType
	 */
	public function setItem($_Item)
	{
		return ($this->Item = $_Item);
	}
	/**
	 * Get Item
	 * @return EbayTradingTypeItemType
	 */
	public function getItem()
	{
		return $this->Item;
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