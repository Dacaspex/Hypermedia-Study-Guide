<?php

include_once __DIR__ . '\..\models\Content.php';

/**
* Content controller to handle the content table in the data base.
* Contains all content for the bachelors, pre-masters and masters.
*/
class ContentController
{
    private $templates;

	private $PDO;
	
	function __construct(\League\Plates\Engine $templates, $PDO)
	{
        $this->templates = $templates;
		$this->PDO = $PDO;
	}

	function index($programSlug, $pageSlug)
	{

	    // Debug
        $content = new Content(1, 'Program name', 'Page name', 'Body', 'https://www.tue.nl/fileadmin/_processed_/0/6/csm__WH33865_purple_gradient_a3138296f6.png', 2, 3);
        return $this->templates->render('program', compact('content'));

	}
}