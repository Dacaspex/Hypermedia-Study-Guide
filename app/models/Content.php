<?php

/**
* 
*/
class Content
{
	private $id;
	private $programName;
	private $pageName;
	private $body;
	private $createdAt;
	private $updatedAt;
	
	function __construct($id, $programName, $pageName, $body, $createdAt, $updatedAt)
	{
		$this->id = $id;
		$this->programName = $programName;
		$this->pageName = $pageName;
		$this->body = $body;
		$this->createdAt = $createdAt;
		$this->updatedAt = $updatedAt;
	}

	public function getId()
	{
		return $this->id;
	}

	public function getProgramName()
	{
		return $this->programName;
	}

	public function getPageName()
	{
		return $this->pageName;
	}

	public function getBody()
	{
		return $this->body;
	}

	public function getCreatedAt()
	{
		return $this->createdAt;
	}

	public function getUpdatedAt()
	{
		return $this->updatedAt;
	}

}