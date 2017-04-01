<?php

class Subject
{
    private $id;
    private $quarter;
    private $year;
    private $subjectName;

    function __construct($id, $quarter, $year, $subjectName)
    {
        $this->id = $id;
        $this->quarter = $quarter;
        $this->year = $year;
        $this->subjectName = $subjectName;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getQuarter()
    {
        return $this->quarter;
    }

    public function getYear()
    {
        return $this->year;
    }

    public function getSubjectName()
    {
        return $this->subjectName;
    }
}