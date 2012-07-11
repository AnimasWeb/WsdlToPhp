<?php
/**
 * Class file for XiAnalystsTypeResearchReportTemplate
 * @date 08/07/2012
 */
/**
 * Class XiAnalystsTypeResearchReportTemplate
 * @date 08/07/2012
 */
class XiAnalystsTypeResearchReportTemplate extends XiAnalystsWsdlClass
{
	/**
	 * The Title
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Title;
	/**
	 * The ResearchReportLineTemplates
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiAnalystsTypeArrayOfResearchReportLineTemplate
	 */
	public $ResearchReportLineTemplates;
	/**
	 * The Outcome
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiAnalystsTypeOutcomeTypes
	 */
	public $Outcome;
	/**
	 * The Message
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Message;
	/**
	 * Constructor
	 * @param string Title
	 * @param XiAnalystsTypeArrayOfResearchReportLineTemplate ResearchReportLineTemplates
	 * @param XiAnalystsTypeOutcomeTypes Outcome
	 * @param string Message
	 * @return XiAnalystsTypeResearchReportTemplate
	 */
	public function __construct($_Title = null,$_ResearchReportLineTemplates = null,$_Outcome,$_Message = null)
	{
		parent::__construct(array('Title'=>$_Title,'ResearchReportLineTemplates'=>new XiAnalystsTypeArrayOfResearchReportLineTemplate($_ResearchReportLineTemplates),'Outcome'=>$_Outcome,'Message'=>$_Message));
	}
	/**
	 * Set Title
	 * @param string Title
	 * @return string
	 */
	public function setTitle($_Title)
	{
		return ($this->Title = $_Title);
	}
	/**
	 * Get Title
	 * @return string
	 */
	public function getTitle()
	{
		return $this->Title;
	}
	/**
	 * Set ResearchReportLineTemplates
	 * @param ArrayOfResearchReportLineTemplate ResearchReportLineTemplates
	 * @return ArrayOfResearchReportLineTemplate
	 */
	public function setResearchReportLineTemplates($_ResearchReportLineTemplates)
	{
		return ($this->ResearchReportLineTemplates = $_ResearchReportLineTemplates);
	}
	/**
	 * Get ResearchReportLineTemplates
	 * @return XiAnalystsTypeArrayOfResearchReportLineTemplate
	 */
	public function getResearchReportLineTemplates()
	{
		return $this->ResearchReportLineTemplates;
	}
	/**
	 * Set Outcome
	 * @param OutcomeTypes Outcome
	 * @return OutcomeTypes
	 */
	public function setOutcome($_Outcome)
	{
		return ($this->Outcome = XiAnalystsTypeOutcomeTypes::valueIsValid($_Outcome)?$_Outcome:null);
	}
	/**
	 * Get Outcome
	 * @return XiAnalystsTypeOutcomeTypes
	 */
	public function getOutcome()
	{
		return $this->Outcome;
	}
	/**
	 * Set Message
	 * @param string Message
	 * @return string
	 */
	public function setMessage($_Message)
	{
		return ($this->Message = $_Message);
	}
	/**
	 * Get Message
	 * @return string
	 */
	public function getMessage()
	{
		return $this->Message;
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