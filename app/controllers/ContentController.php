<?php

include_once __DIR__ . '\..\models\Content.php';

/**
* Content controller to handle the content table in the data base.
* Contains all content for the bachelors, pre-masters and masters.
*/
class ContentController
{
    /**
     * @var \League\Plates\Engine
     */
    private $templates;

    /**
     * @var ContentRetriever
     */
	private $retriever;
	
	function __construct(\League\Plates\Engine $templates, ContentRetriever $retriever)
	{
        $this->templates = $templates;
		$this->retriever = $retriever;
	}

	function index($programSlug, $pageSlug)
	{
        $content = $this->retriever->getPageContent($programSlug, $pageSlug);

        return $this->templates->render('program', compact('content'));
	}
}