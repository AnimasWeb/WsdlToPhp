<?php
/**
 * Class file for YMailTypeFid
 * @date 02/07/2012
 */
/**
 * Class YMailTypeFid
 * @date 02/07/2012
 */
class YMailTypeFid extends YMailWsdlClass
{
	/**
	 * The fid
	 * Meta informations :
	 * 	- default : 
	 * @var string
	 */
	public $fid;
	/**
	 * The name
	 * Meta informations :
	 * 	- use : optional
	 * @var string
	 */
	public $name;
	/**
	 * Constructor
	 * @param string fid
	 * @param string name
	 * @return YMailTypeFid
	 */
	public function __construct($_fid = '',$_name = null)
	{
		parent::__construct(array('fid'=>$_fid,'name'=>$_name));
	}
	/**
	 * Set fid
	 * @param string fid
	 * @return string
	 */
	public function setFid($_fid)
	{
		return ($this->fid = $_fid);
	}
	/**
	 * Get fid
	 * @return string
	 */
	public function getFid()
	{
		return $this->fid;
	}
	/**
	 * Set name
	 * @param string name
	 * @return string
	 */
	public function setName($_name)
	{
		return ($this->name = $_name);
	}
	/**
	 * Get name
	 * @return string
	 */
	public function getName()
	{
		return $this->name;
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