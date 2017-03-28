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

    function __construct($templates, $contentRetriever, $curriculumRetriever)
    {
        $this->templates = $templates;
        $this->curriculumRetriever = $curriculumRetriever;
        $this->contentRetriever = $contentRetriever;
    }

    public function index($type, $programSlug, $pageSlug, PDO $pdo)
    {
        $content = $this->contentRetriever->getPageContent($type, $programSlug, $pageSlug, Language::getLocale());
        $subjects = $this->curriculumRetriever->getCurriculum($type, $programSlug);
        $programs = HomeController::getPrograms($pdo);

        return $this->templates->render('curriculum', compact('content', 'subjects'));
    }
}