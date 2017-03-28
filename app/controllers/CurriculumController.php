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

    function __construct($templates, $curriculumRetriever, $contentRetriever)
    {
        $this->templates = $templates;
        $this->curriculumRetriever = $curriculumRetriever;
        $this->contentRetriever = $contentRetriever;
    }

    public function index($type, $programSlug, $pageSlug)
    {
        $content = $this->contentRetriever->getPageContent($type, $programSlug, $pageSlug);
        $curriculum = $this->curriculumRetriever->getCurriculum($type, $programSlug);
        return $this->templates->render('curriculum', compact('content', 'curriculum'));
    }
}