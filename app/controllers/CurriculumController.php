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

    /**
     * Test function to seed the database
     * TODO: Should be removed
     * @param PDO $pdo
     */
    public function test(PDO $pdo) {

        $numYears = 3;
        $numQuartiles = 4;
        $numSubjects = 3;
        $index = 0;

        for ($year = 1; $year <= $numYears; $year++) {
            for ($quartile = 1; $quartile <= $numQuartiles; $quartile++) {
                for ($subjectNumber = 1; $subjectNumber <= $numSubjects; $subjectNumber++) {

                    $statement = $pdo->prepare("INSERT INTO curriculi (quarter, year, name, program_id) VALUES (?, ?, ?, 1)");
                    $name = 'Subject ' . $index++;
                    $statement->bindParam(1, $quartile);
                    $statement->bindParam(2, $year);
                    $statement->bindParam(3, $name);
                    $statement->execute();
                    echo 'Inserted ' . $name . '</br>';

                }
            }
        }

    }

    public function index($type, $programSlug, $pageSlug, PDO $pdo)
    {

        $content = $this->contentRetriever->getPageContent($type, $programSlug, $pageSlug, Language::getLocale());
        $curriculum = $this->curriculumRetriever->getCurriculum($type, $programSlug);
        $programs = HomeController::getPrograms($pdo);

        return $this->templates->render('curriculum', compact('content', 'curriculum'));
    }
}