<?php
/**
 * Class file for AmazonAlexaTypeWebMapRequest
 * @date 10/07/2012
 */
/**
 * Class AmazonAlexaTypeWebMapRequest
 * @date 10/07/2012
 */
class AmazonAlexaTypeWebMapRequest extends AmazonAlexaWsdlClass
{
	/**
	 * The Security
	 * @var AmazonAlexaTypeSecurity
	 */
	public $Security;
	/**
	 * The Url
	 * @var string
	 */
	public $Url;
	/**
	 * The ResponseGroup
	 * @var string
	 */
	public $ResponseGroup;
	/**
	 * The Version
	 * @var string
	 */
	public $Version;
	/**
	 * The Count
	 * @var string
	 */
	public $Count;
	/**
	 * The Start
	 * @var string
	 */
	public $Start;
	/**
	 * Constructor
	 * @param AmazonAlexaTypeSecurity Security
	 * @param string Url
	 * @param string ResponseGroup
	 * @param string Version
	 * @param string Count
	 * @param string Start
	 * @return AmazonAlexaTypeWebMapRequest
	 */
	public function __construct($_Security = null,$_Url = null,$_ResponseGroup = null,$_Version = null,$_Count = null,$_Start = null)
	{
		parent::__construct(array('Security'=>$_Security,'Url'=>$_Url,'ResponseGroup'=>$_ResponseGroup,'Version'=>$_Version,'Count'=>$_Count,'Start'=>$_Start));
	}
	/**
	 * Set Security
	 * @param Security Security
	 * @return Security
	 */
	public function setSecurity($_Security)
	{
		return ($this->Security = $_Security);
	}
	/**
	 * Get Security
	 * @return AmazonAlexaTypeSecurity
	 */
	public function getSecurity()
	{
		return $this->Security;
	}
	/**
	 * Set Url
	 * @param string Url
	 * @return string
	 */
	public function setUrl($_Url)
	{
		return ($this->Url = $_Url);
	}
	/**
	 * Get Url
	 * @return string
	 */
	public function getUrl()
	{
		return $this->Url;
	}
	/**
	 * Set ResponseGroup
	 * @param string ResponseGroup
	 * @return string
	 */
	public function setResponseGroup($_ResponseGroup)
	{
		return ($this->ResponseGroup = $_ResponseGroup);
	}
	/**
	 * Get ResponseGroup
	 * @return string
	 */
	public function getResponseGroup()
	{
		return $this->ResponseGroup;
	}
	/**
	 * Set Version
	 * @param string Version
	 * @return string
	 */
	public function setVersion($_Version)
	{
		return ($this->Version = $_Version);
	}
	/**
	 * Get Version
	 * @return string
	 */
	public function getVersion()
	{
		return $this->Version;
	}
	/**
	 * Set Count
	 * @param string Count
	 * @return string
	 */
	public function setCount($_Count)
	{
		return ($this->Count = $_Count);
	}
	/**
	 * Get Count
	 * @return string
	 */
	public function getCount()
	{
		return $this->Count;
	}
	/**
	 * Set Start
	 * @param string Start
	 * @return string
	 */
	public function setStart($_Start)
	{
		return ($this->Start = $_Start);
	}
	/**
	 * Get Start
	 * @return string
	 */
	public function getStart()
	{
		return $this->Start;
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