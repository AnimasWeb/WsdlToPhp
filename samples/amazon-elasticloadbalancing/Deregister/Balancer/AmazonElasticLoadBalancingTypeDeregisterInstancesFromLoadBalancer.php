<?php
/**
 * Class file for AmazonElasticLoadBalancingTypeDeregisterInstancesFromLoadBalancer
 * @date 10/07/2012
 */
/**
 * Class AmazonElasticLoadBalancingTypeDeregisterInstancesFromLoadBalancer
 * @date 10/07/2012
 */
class AmazonElasticLoadBalancingTypeDeregisterInstancesFromLoadBalancer extends AmazonElasticLoadBalancingWsdlClass
{
	/**
	 * The LoadBalancerName
	 * Meta informations :
	 * 	- documentation : <p> The name associated with the LoadBalancer. The name must be unique within the client AWS account. </p>
	 * @var string
	 */
	public $LoadBalancerName;
	/**
	 * The Instances
	 * Meta informations :
	 * 	- documentation : <p> A list of EC2 instance IDs consisting of all instances to be deregistered. </p>
	 * @var AmazonElasticLoadBalancingTypeInstances
	 */
	public $Instances;
	/**
	 * Constructor
	 * @param string LoadBalancerName
	 * @param AmazonElasticLoadBalancingTypeInstances Instances
	 * @return AmazonElasticLoadBalancingTypeDeregisterInstancesFromLoadBalancer
	 */
	public function __construct($_LoadBalancerName = null,$_Instances = null)
	{
		parent::__construct(array('LoadBalancerName'=>$_LoadBalancerName,'Instances'=>$_Instances));
	}
	/**
	 * Set LoadBalancerName
	 * @param string LoadBalancerName
	 * @return string
	 */
	public function setLoadBalancerName($_LoadBalancerName)
	{
		return ($this->LoadBalancerName = $_LoadBalancerName);
	}
	/**
	 * Get LoadBalancerName
	 * @return string
	 */
	public function getLoadBalancerName()
	{
		return $this->LoadBalancerName;
	}
	/**
	 * Set Instances
	 * @param Instances Instances
	 * @return Instances
	 */
	public function setInstances($_Instances)
	{
		return ($this->Instances = $_Instances);
	}
	/**
	 * Get Instances
	 * @return AmazonElasticLoadBalancingTypeInstances
	 */
	public function getInstances()
	{
		return $this->Instances;
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