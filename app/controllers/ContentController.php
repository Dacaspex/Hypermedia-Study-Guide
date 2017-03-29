<?php

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

    /**
     * @var LinkRetriever
     */
	private $links;
	
	function __construct(\League\Plates\Engine $templates, ContentRetriever $retriever, LinkRetriever $links)
	{
        $this->templates = $templates;
		$this->retriever = $retriever;
		$this->links = $links;
	}

	function index($type, $programSlug, $pageSlug, PDO $pdo)
	{
        $content = $this->retriever->getPageContent($type, $programSlug, $pageSlug, Language::getLocale());
        $programs = HomeController::getPrograms($pdo);
        $links = $this->links->getMenuLinks($content->getProgram());

        return $this->templates->render('program', compact('content', 'programs', 'links'));
	}
}