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

    function __construct($templates, $curriculumRetriever, $programRetriever)
    {
        $this->curriculumRetriever = $curriculumRetriever;
        $this->contentRetriever = $programRetriever;
    }

    public function index($programSlug)
    {

        $content = $this->contentRetriever->getPageContent($programSlug, 'curriculum');
        $curriculum = $this->curriculumRetriever->getCurriculum($programSlug);

        $this->templates->render('curriculum', compact('content', 'curriculum'));
    }
}