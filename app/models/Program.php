 
<?php

class Program
{
	private $id;
	private $name;
	private $slug;
	private $type;
	private $numStudents;
	private $numCourses;
	private $numGrads;
	private $contactLink;
	private $links; // Array of instances of the Link model
	
	function __construct($id, $name, $slug, $type, $numStudents, $numCourses, $numGrads, $contactLink, $links)
	{
        $this->id = $id;
        $this->name = $name;
        $this->slug = $slug;
        $this->type = $type;
        $this->numStudents = $numStudents;
        $this->numCourses = $numCourses;
        $this->numGrads = $numGrads;
        $this->contactLink = $contactLink;
        $this->links = $links;
	}


    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getSlug()
    {
        return $this->slug;
    }

    public function getType()
    {
        return $this->type;
    }

    public function getNumStudents()
    {
        return $this->numStudents;
    }

    public function getNumCourses()
    {
        return $this->numCourses;
    }

    public function getNumGrads()
    {
        return $this->numGrads;
    }

    public function getContactLink()
    {
        return $this->contactLink;
    }

    public function getLinks()
    {
        return $this->links;
    }
}