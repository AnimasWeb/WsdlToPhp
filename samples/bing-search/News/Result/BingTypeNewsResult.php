<?php
/**
 * Class file for BingTypeNewsResult
 * @date 02/07/2012
 */
/**
 * Class BingTypeNewsResult
 * @date 02/07/2012
 */
class BingTypeNewsResult extends BingWsdlClass
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
	 * The Url
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Url;
	/**
	 * The Source
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Source;
	/**
	 * The Snippet
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Snippet;
	/**
	 * The Date
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Date;
	/**
	 * The BreakingNews
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var unsignedInt
	 */
	public $BreakingNews;
	/**
	 * The NewsCollections
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var BingTypeArrayOfNewsCollection
	 */
	public $NewsCollections;
	/**
	 * Constructor
	 * @param string Title
	 * @param string Url
	 * @param string Source
	 * @param string Snippet
	 * @param string Date
	 * @param unsignedInt BreakingNews
	 * @param BingTypeArrayOfNewsCollection NewsCollections
	 * @return BingTypeNewsResult
	 */
	public function __construct($_Title = null,$_Url = null,$_Source = null,$_Snippet = null,$_Date = null,$_BreakingNews = null,$_NewsCollections = null)
	{
		parent::__construct(array('Title'=>$_Title,'Url'=>$_Url,'Source'=>$_Source,'Snippet'=>$_Snippet,'Date'=>$_Date,'BreakingNews'=>$_BreakingNews,'NewsCollections'=>new BingTypeArrayOfNewsCollection($_NewsCollections)));
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
	 * Set Source
	 * @param string Source
	 * @return string
	 */
	public function setSource($_Source)
	{
		return ($this->Source = $_Source);
	}
	/**
	 * Get Source
	 * @return string
	 */
	public function getSource()
	{
		return $this->Source;
	}
	/**
	 * Set Snippet
	 * @param string Snippet
	 * @return string
	 */
	public function setSnippet($_Snippet)
	{
		return ($this->Snippet = $_Snippet);
	}
	/**
	 * Get Snippet
	 * @return string
	 */
	public function getSnippet()
	{
		return $this->Snippet;
	}
	/**
	 * Set Date
	 * @param string Date
	 * @return string
	 */
	public function setDate($_Date)
	{
		return ($this->Date = $_Date);
	}
	/**
	 * Get Date
	 * @return string
	 */
	public function getDate()
	{
		return $this->Date;
	}
	/**
	 * Set BreakingNews
	 * @param unsignedInt BreakingNews
	 * @return unsignedInt
	 */
	public function setBreakingNews($_BreakingNews)
	{
		return ($this->BreakingNews = $_BreakingNews);
	}
	/**
	 * Get BreakingNews
	 * @return unsignedInt
	 */
	public function getBreakingNews()
	{
		return $this->BreakingNews;
	}
	/**
	 * Set NewsCollections
	 * @param ArrayOfNewsCollection NewsCollections
	 * @return ArrayOfNewsCollection
	 */
	public function setNewsCollections($_NewsCollections)
	{
		return ($this->NewsCollections = $_NewsCollections);
	}
	/**
	 * Get NewsCollections
	 * @return BingTypeArrayOfNewsCollection
	 */
	public function getNewsCollections()
	{
		return $this->NewsCollections;
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