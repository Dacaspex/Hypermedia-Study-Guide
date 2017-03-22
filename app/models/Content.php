<?php

/**
* 
*/
class Content
{
	private $id;
	private $program;
	private $page;
	private $body;
	
	function __construct($id, $program, $page, $body)
	{
		$this->id = $id;
		$this->program = $program;
		$this->page = $page;
		$this->body = $body;
	}

	public function getId()
	{
		return $this->id;
	}

	public function getProgram()
    {
        return $this->program;
    }

    public function getPage()
    {
        return $this->page;
    }

    public function getBody()
    {
        return $this->body;
    }

}