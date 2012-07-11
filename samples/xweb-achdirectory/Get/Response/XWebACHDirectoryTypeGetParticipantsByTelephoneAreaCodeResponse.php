<?php
/**
 * Class file for XWebACHDirectoryTypeGetParticipantsByTelephoneAreaCodeResponse
 * @date 09/07/2012
 */
/**
 * Class XWebACHDirectoryTypeGetParticipantsByTelephoneAreaCodeResponse
 * @date 09/07/2012
 */
class XWebACHDirectoryTypeGetParticipantsByTelephoneAreaCodeResponse extends XWebACHDirectoryWsdlClass
{
	/**
	 * The Directory
	 * @var XWebACHDirectoryTypeDirectory
	 */
	public $Directory;
	/**
	 * Constructor
	 * @param XWebACHDirectoryTypeDirectory Directory
	 * @return XWebACHDirectoryTypeGetParticipantsByTelephoneAreaCodeResponse
	 */
	public function __construct($_Directory = null)
	{
		parent::__construct(array('Directory'=>$_Directory));
	}
	/**
	 * Set Directory
	 * @param Directory Directory
	 * @return Directory
	 */
	public function setDirectory($_Directory)
	{
		return ($this->Directory = $_Directory);
	}
	/**
	 * Get Directory
	 * @return XWebACHDirectoryTypeDirectory
	 */
	public function getDirectory()
	{
		return $this->Directory;
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