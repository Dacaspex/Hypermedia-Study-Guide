<?php

/**
* 
*/
class Content
{
	private $id;
	private $programId;
	private $pageId;
	private $body;
	private $createdAt
	private $updatedAt;
	
	function __construct($id, $programId, $pageId, $body, $createdAt, $updatedAt)
	{
		$this->id = $id;
		$this->programId = $programId;
		$this->pageId = $pageId;
		$this->body = $body;
		$this->createdAt = $createdAt;
		$this->updatedAt = $updatedAt;
	}

	public getId()
	{
		return $this->id;
	}

	public getProgramId()
	{
		return $this->programId;
	}

	public getPageId()
	{
		return $this->pageId;
	}

	public getBody()
	{
		return $this->body;
	}

	public getCreatedAt()
	{
		return $this->createdAt;
	}

	public getUpdatedAt()
	{
		return $this->updatedAt;
	}

}