<?php
/**
 * Class file for LifePicsTypeGetStoresByLongitudeLatitudeDistanceMerchantGroupMetric
 * @date 02/08/2012
 */
/**
 * Class LifePicsTypeGetStoresByLongitudeLatitudeDistanceMerchantGroupMetric
 * @date 02/08/2012
 */
class LifePicsTypeGetStoresByLongitudeLatitudeDistanceMerchantGroupMetric extends LifePicsWsdlClass
{
	/**
	 * The SessionID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $SessionID;
	/**
	 * The Longitude
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Longitude;
	/**
	 * The Latitude
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Latitude;
	/**
	 * The Distance
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Distance;
	/**
	 * The PickupOnly
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $PickupOnly;
	/**
	 * The MerchantGroupKey
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $MerchantGroupKey;
	/**
	 * The IsMetric
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $IsMetric;
	/**
	 * Constructor
	 * @param string SessionID
	 * @param string Longitude
	 * @param string Latitude
	 * @param string Distance
	 * @param boolean PickupOnly
	 * @param string MerchantGroupKey
	 * @param boolean IsMetric
	 * @return LifePicsTypeGetStoresByLongitudeLatitudeDistanceMerchantGroupMetric
	 */
	public function __construct($_SessionID = null,$_Longitude = null,$_Latitude = null,$_Distance = null,$_PickupOnly,$_MerchantGroupKey = null,$_IsMetric)
	{
		parent::__construct(array('SessionID'=>$_SessionID,'Longitude'=>$_Longitude,'Latitude'=>$_Latitude,'Distance'=>$_Distance,'PickupOnly'=>$_PickupOnly,'MerchantGroupKey'=>$_MerchantGroupKey,'IsMetric'=>$_IsMetric));
	}
	/**
	 * Set SessionID
	 * @param string SessionID
	 * @return string
	 */
	public function setSessionID($_SessionID)
	{
		return ($this->SessionID = $_SessionID);
	}
	/**
	 * Get SessionID
	 * @return string
	 */
	public function getSessionID()
	{
		return $this->SessionID;
	}
	/**
	 * Set Longitude
	 * @param string Longitude
	 * @return string
	 */
	public function setLongitude($_Longitude)
	{
		return ($this->Longitude = $_Longitude);
	}
	/**
	 * Get Longitude
	 * @return string
	 */
	public function getLongitude()
	{
		return $this->Longitude;
	}
	/**
	 * Set Latitude
	 * @param string Latitude
	 * @return string
	 */
	public function setLatitude($_Latitude)
	{
		return ($this->Latitude = $_Latitude);
	}
	/**
	 * Get Latitude
	 * @return string
	 */
	public function getLatitude()
	{
		return $this->Latitude;
	}
	/**
	 * Set Distance
	 * @param string Distance
	 * @return string
	 */
	public function setDistance($_Distance)
	{
		return ($this->Distance = $_Distance);
	}
	/**
	 * Get Distance
	 * @return string
	 */
	public function getDistance()
	{
		return $this->Distance;
	}
	/**
	 * Set PickupOnly
	 * @param boolean PickupOnly
	 * @return boolean
	 */
	public function setPickupOnly($_PickupOnly)
	{
		return ($this->PickupOnly = $_PickupOnly);
	}
	/**
	 * Get PickupOnly
	 * @return boolean
	 */
	public function getPickupOnly()
	{
		return $this->PickupOnly;
	}
	/**
	 * Set MerchantGroupKey
	 * @param string MerchantGroupKey
	 * @return string
	 */
	public function setMerchantGroupKey($_MerchantGroupKey)
	{
		return ($this->MerchantGroupKey = $_MerchantGroupKey);
	}
	/**
	 * Get MerchantGroupKey
	 * @return string
	 */
	public function getMerchantGroupKey()
	{
		return $this->MerchantGroupKey;
	}
	/**
	 * Set IsMetric
	 * @param boolean IsMetric
	 * @return boolean
	 */
	public function setIsMetric($_IsMetric)
	{
		return ($this->IsMetric = $_IsMetric);
	}
	/**
	 * Get IsMetric
	 * @return boolean
	 */
	public function getIsMetric()
	{
		return $this->IsMetric;
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