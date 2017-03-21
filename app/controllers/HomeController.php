<?php

class HomeController
{
    private $templates;

    function __construct(\League\Plates\Engine $templates)
    {
        $this->templates = $templates;
    }

    public function index()
    {
        return $this->templates->render('home');
    }
}