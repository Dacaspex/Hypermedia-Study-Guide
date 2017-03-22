<?php

class CurriculumController
{
    private $templates;
    private $PDO;

    function __construct($templates, $PDO)
    {
        $this->templates = $templates;
        $this->PDO = $PDO;
    }

    public function index($programSlug)
    {



    }
}