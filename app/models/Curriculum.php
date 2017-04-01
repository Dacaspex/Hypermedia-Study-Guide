<?php

class Curriculum
{
    private $subjects;

    function __construct($subjects)
    {
        $this->subjects = $subjects;
    }

    public function getSubjectsRow($year, $offset)
    {
        $yearSubjects = array();
        $quartileSubjects = array(
            0 => array(),
            1 => array(),
            2 => array(),
            3 => array()
        );

        foreach ($this->subjects as $subject) {

            if ($subject->getYear() == $year) {
                array_push($yearSubjects, $subject);
            }

        }

        foreach ($yearSubjects as $subject) {

            array_push($quartileSubjects[$subject->getQuarter() - 1], $subject);

        }

        $returnSubjects = array();

        foreach ($quartileSubjects as $quartile) {

            array_push($returnSubjects, $quartile[$offset]);

        }

        return $returnSubjects;

    }
}