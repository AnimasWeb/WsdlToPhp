<?php
/**
 * Class file for OvhTypeEmailGetCapabilitiesReturn
 * @date 02/07/2012
 */
/**
 * Class OvhTypeEmailGetCapabilitiesReturn
 * @date 02/07/2012
 */
class OvhTypeEmailGetCapabilitiesReturn extends OvhWsdlClass
{
	/**
	 * The name
	 * @var string
	 */
	public $name;
	/**
	 * The nbpops
	 * @var int
	 */
	public $nbpops;
	/**
	 * The nbforwards
	 * @var int
	 */
	public $nbforwards;
	/**
	 * The nbaliases
	 * @var int
	 */
	public $nbaliases;
	/**
	 * The nbresponders
	 * @var int
	 */
	public $nbresponders;
	/**
	 * The nbmls
	 * @var int
	 */
	public $nbmls;
	/**
	 * Constructor
	 * @param string name
	 * @param int nbpops
	 * @param int nbforwards
	 * @param int nbaliases
	 * @param int nbresponders
	 * @param int nbmls
	 * @return OvhTypeEmailGetCapabilitiesReturn
	 */
	public function __construct($_name = null,$_nbpops = null,$_nbforwards = null,$_nbaliases = null,$_nbresponders = null,$_nbmls = null)
	{
		parent::__construct(array('name'=>$_name,'nbpops'=>$_nbpops,'nbforwards'=>$_nbforwards,'nbaliases'=>$_nbaliases,'nbresponders'=>$_nbresponders,'nbmls'=>$_nbmls));
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
	 * Set nbpops
	 * @param int nbpops
	 * @return int
	 */
	public function setNbpops($_nbpops)
	{
		return ($this->nbpops = $_nbpops);
	}
	/**
	 * Get nbpops
	 * @return int
	 */
	public function getNbpops()
	{
		return $this->nbpops;
	}
	/**
	 * Set nbforwards
	 * @param int nbforwards
	 * @return int
	 */
	public function setNbforwards($_nbforwards)
	{
		return ($this->nbforwards = $_nbforwards);
	}
	/**
	 * Get nbforwards
	 * @return int
	 */
	public function getNbforwards()
	{
		return $this->nbforwards;
	}
	/**
	 * Set nbaliases
	 * @param int nbaliases
	 * @return int
	 */
	public function setNbaliases($_nbaliases)
	{
		return ($this->nbaliases = $_nbaliases);
	}
	/**
	 * Get nbaliases
	 * @return int
	 */
	public function getNbaliases()
	{
		return $this->nbaliases;
	}
	/**
	 * Set nbresponders
	 * @param int nbresponders
	 * @return int
	 */
	public function setNbresponders($_nbresponders)
	{
		return ($this->nbresponders = $_nbresponders);
	}
	/**
	 * Get nbresponders
	 * @return int
	 */
	public function getNbresponders()
	{
		return $this->nbresponders;
	}
	/**
	 * Set nbmls
	 * @param int nbmls
	 * @return int
	 */
	public function setNbmls($_nbmls)
	{
		return ($this->nbmls = $_nbmls);
	}
	/**
	 * Get nbmls
	 * @return int
	 */
	public function getNbmls()
	{
		return $this->nbmls;
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