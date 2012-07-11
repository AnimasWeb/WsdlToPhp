<?php
/**
 * Class file for AmazonEc2TypeDescribeSnapshotsSetItemResponseType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeDescribeSnapshotsSetItemResponseType
 * @date 10/07/2012
 */
class AmazonEc2TypeDescribeSnapshotsSetItemResponseType extends AmazonEc2WsdlClass
{
	/**
	 * The snapshotId
	 * @var string
	 */
	public $snapshotId;
	/**
	 * The volumeId
	 * @var string
	 */
	public $volumeId;
	/**
	 * The status
	 * @var string
	 */
	public $status;
	/**
	 * The startTime
	 * @var dateTime
	 */
	public $startTime;
	/**
	 * The progress
	 * @var string
	 */
	public $progress;
	/**
	 * The ownerId
	 * @var string
	 */
	public $ownerId;
	/**
	 * The volumeSize
	 * @var string
	 */
	public $volumeSize;
	/**
	 * The description
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $description;
	/**
	 * The ownerAlias
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $ownerAlias;
	/**
	 * The tagSet
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var AmazonEc2TypeResourceTagSetType
	 */
	public $tagSet;
	/**
	 * Constructor
	 * @param string snapshotId
	 * @param string volumeId
	 * @param string status
	 * @param dateTime startTime
	 * @param string progress
	 * @param string ownerId
	 * @param string volumeSize
	 * @param string description
	 * @param string ownerAlias
	 * @param AmazonEc2TypeResourceTagSetType tagSet
	 * @return AmazonEc2TypeDescribeSnapshotsSetItemResponseType
	 */
	public function __construct($_snapshotId = null,$_volumeId = null,$_status = null,$_startTime = null,$_progress = null,$_ownerId = null,$_volumeSize = null,$_description = null,$_ownerAlias = null,$_tagSet = null)
	{
		parent::__construct(array('snapshotId'=>$_snapshotId,'volumeId'=>$_volumeId,'status'=>$_status,'startTime'=>$_startTime,'progress'=>$_progress,'ownerId'=>$_ownerId,'volumeSize'=>$_volumeSize,'description'=>$_description,'ownerAlias'=>$_ownerAlias,'tagSet'=>$_tagSet));
	}
	/**
	 * Set snapshotId
	 * @param string snapshotId
	 * @return string
	 */
	public function setSnapshotId($_snapshotId)
	{
		return ($this->snapshotId = $_snapshotId);
	}
	/**
	 * Get snapshotId
	 * @return string
	 */
	public function getSnapshotId()
	{
		return $this->snapshotId;
	}
	/**
	 * Set volumeId
	 * @param string volumeId
	 * @return string
	 */
	public function setVolumeId($_volumeId)
	{
		return ($this->volumeId = $_volumeId);
	}
	/**
	 * Get volumeId
	 * @return string
	 */
	public function getVolumeId()
	{
		return $this->volumeId;
	}
	/**
	 * Set status
	 * @param string status
	 * @return string
	 */
	public function setStatus($_status)
	{
		return ($this->status = $_status);
	}
	/**
	 * Get status
	 * @return string
	 */
	public function getStatus()
	{
		return $this->status;
	}
	/**
	 * Set startTime
	 * @param dateTime startTime
	 * @return dateTime
	 */
	public function setStartTime($_startTime)
	{
		return ($this->startTime = $_startTime);
	}
	/**
	 * Get startTime
	 * @return dateTime
	 */
	public function getStartTime()
	{
		return $this->startTime;
	}
	/**
	 * Set progress
	 * @param string progress
	 * @return string
	 */
	public function setProgress($_progress)
	{
		return ($this->progress = $_progress);
	}
	/**
	 * Get progress
	 * @return string
	 */
	public function getProgress()
	{
		return $this->progress;
	}
	/**
	 * Set ownerId
	 * @param string ownerId
	 * @return string
	 */
	public function setOwnerId($_ownerId)
	{
		return ($this->ownerId = $_ownerId);
	}
	/**
	 * Get ownerId
	 * @return string
	 */
	public function getOwnerId()
	{
		return $this->ownerId;
	}
	/**
	 * Set volumeSize
	 * @param string volumeSize
	 * @return string
	 */
	public function setVolumeSize($_volumeSize)
	{
		return ($this->volumeSize = $_volumeSize);
	}
	/**
	 * Get volumeSize
	 * @return string
	 */
	public function getVolumeSize()
	{
		return $this->volumeSize;
	}
	/**
	 * Set description
	 * @param string description
	 * @return string
	 */
	public function setDescription($_description)
	{
		return ($this->description = $_description);
	}
	/**
	 * Get description
	 * @return string
	 */
	public function getDescription()
	{
		return $this->description;
	}
	/**
	 * Set ownerAlias
	 * @param string ownerAlias
	 * @return string
	 */
	public function setOwnerAlias($_ownerAlias)
	{
		return ($this->ownerAlias = $_ownerAlias);
	}
	/**
	 * Get ownerAlias
	 * @return string
	 */
	public function getOwnerAlias()
	{
		return $this->ownerAlias;
	}
	/**
	 * Set tagSet
	 * @param ResourceTagSetType tagSet
	 * @return ResourceTagSetType
	 */
	public function setTagSet($_tagSet)
	{
		return ($this->tagSet = $_tagSet);
	}
	/**
	 * Get tagSet
	 * @return AmazonEc2TypeResourceTagSetType
	 */
	public function getTagSet()
	{
		return $this->tagSet;
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