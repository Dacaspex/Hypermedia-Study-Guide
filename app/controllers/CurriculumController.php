<?php

class CurriculumController
{
    /**
     * @var \League\Plates\Engine
     */
    private $templates;

    /**
     * @var CurriculumRetriever
     */
    private $curriculumRetriever;

    /**
     * @var ContentRetriever
     */
    private $contentRetriever;

    /**
    * @var linkRetriever
    */
    private $links;

    function __construct($templates, $contentRetriever, $curriculumRetriever, $links)
    {
        $this->templates = $templates;
        $this->curriculumRetriever = $curriculumRetriever;
        $this->contentRetriever = $contentRetriever;
        $this->links = $links;
    }

    public function index($type, $programSlug, $pageSlug, PDO $pdo)
    {

        $content = $this->contentRetriever->getPageContent($type, $programSlug, $pageSlug, Language::getLocale());
        $curriculum = $this->curriculumRetriever->getCurriculum($type, $programSlug);
        $programs = HomeController::getPrograms($pdo);
        $links = $this->links->getMenuLinks($content->getProgram());

        return $this->templates->render('curriculum', compact('content', 'programs', 'curriculum', 'links'));
    }
}