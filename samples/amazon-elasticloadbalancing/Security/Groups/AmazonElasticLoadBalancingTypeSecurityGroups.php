<?php
/**
 * Class file for AmazonElasticLoadBalancingTypeSecurityGroups
 * @date 10/07/2012
 */
/**
 * Class AmazonElasticLoadBalancingTypeSecurityGroups
 * @date 10/07/2012
 */
class AmazonElasticLoadBalancingTypeSecurityGroups extends AmazonElasticLoadBalancingWsdlClass
{
	/**
	 * The member
	 * Meta informations :
	 * 	- maxOccurs : unbounded
	 * @var string
	 */
	public $member;
	/**
	 * Constructor
	 * @param string member
	 * @return AmazonElasticLoadBalancingTypeSecurityGroups
	 */
	public function __construct($_member = null)
	{
		parent::__construct(array('member'=>$_member));
	}
	/**
	 * Set member
	 * @param string member
	 * @return string
	 */
	public function setMember($_member)
	{
		return ($this->member = $_member);
	}
	/**
	 * Get member
	 * @return string
	 */
	public function getMember()
	{
		return $this->member;
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