<?php
/**
 * Class file for SOGeoCoderTypeLocation
 * @date 05/07/2012
 */
/**
 * Class SOGeoCoderTypeLocation
 * @date 05/07/2012
 */
class SOGeoCoderTypeLocation extends SOGeoCoderWsdlClass
{
	/**
	 * The Error
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SOGeoCoderTypeErr
	 */
	public $Error;
	/**
	 * The Latitude
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Latitude;
	/**
	 * The Longitude
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Longitude;
	/**
	 * The Zip
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Zip;
	/**
	 * The Tract
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Tract;
	/**
	 * The Block
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Block;
	/**
	 * The Level
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Level;
	/**
	 * The LevelDescription
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $LevelDescription;
	/**
	 * Constructor
	 * @param SOGeoCoderTypeErr Error
	 * @param string Latitude
	 * @param string Longitude
	 * @param string Zip
	 * @param string Tract
	 * @param string Block
	 * @param string Level
	 * @param string LevelDescription
	 * @return SOGeoCoderTypeLocation
	 */
	public function __construct($_Error = null,$_Latitude = null,$_Longitude = null,$_Zip = null,$_Tract = null,$_Block = null,$_Level = null,$_LevelDescription = null)
	{
		parent::__construct(array('Error'=>$_Error,'Latitude'=>$_Latitude,'Longitude'=>$_Longitude,'Zip'=>$_Zip,'Tract'=>$_Tract,'Block'=>$_Block,'Level'=>$_Level,'LevelDescription'=>$_LevelDescription));
	}
	/**
	 * Set Error
	 * @param Err Error
	 * @return Err
	 */
	public function setError($_Error)
	{
		return ($this->Error = $_Error);
	}
	/**
	 * Get Error
	 * @return SOGeoCoderTypeErr
	 */
	public function getError()
	{
		return $this->Error;
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
	 * Set Zip
	 * @param string Zip
	 * @return string
	 */
	public function setZip($_Zip)
	{
		return ($this->Zip = $_Zip);
	}
	/**
	 * Get Zip
	 * @return string
	 */
	public function getZip()
	{
		return $this->Zip;
	}
	/**
	 * Set Tract
	 * @param string Tract
	 * @return string
	 */
	public function setTract($_Tract)
	{
		return ($this->Tract = $_Tract);
	}
	/**
	 * Get Tract
	 * @return string
	 */
	public function getTract()
	{
		return $this->Tract;
	}
	/**
	 * Set Block
	 * @param string Block
	 * @return string
	 */
	public function setBlock($_Block)
	{
		return ($this->Block = $_Block);
	}
	/**
	 * Get Block
	 * @return string
	 */
	public function getBlock()
	{
		return $this->Block;
	}
	/**
	 * Set Level
	 * @param string Level
	 * @return string
	 */
	public function setLevel($_Level)
	{
		return ($this->Level = $_Level);
	}
	/**
	 * Get Level
	 * @return string
	 */
	public function getLevel()
	{
		return $this->Level;
	}
	/**
	 * Set LevelDescription
	 * @param string LevelDescription
	 * @return string
	 */
	public function setLevelDescription($_LevelDescription)
	{
		return ($this->LevelDescription = $_LevelDescription);
	}
	/**
	 * Get LevelDescription
	 * @return string
	 */
	public function getLevelDescription()
	{
		return $this->LevelDescription;
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