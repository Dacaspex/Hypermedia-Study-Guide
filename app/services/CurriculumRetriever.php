<?php

class CurriculumRetriever
{

    /**
     * @var PDO
     */
    private $PDO;

    function __construct($PDO)
    {
        $this->PDO = $PDO;
    }

    public function getCurriculum($type, $programSlug)
    {
        $programId = $this->getProgramId($type, $programSlug);
        $statement = $this->PDO->prepare("SELECT * FROM curriculi WHERE program_id = ? ORDER BY year ASC, quarter ASC");
        $statement->bindParam(1, $programId);
        $statement->execute();

        $results = $statement->fetchAll(PDO::FETCH_ASSOC);
        $subjects = array();

        foreach ($results as $subject) {

            $subject = new Curriculum(
                $subject['id'],
                $subject['quarter'],
                $subject['year'],
                $subject['name']
            );
            array_push($subjects, $subject);

        }

        return $this->buildCurriculum($subjects);

    }

    public function buildCurriculum($subjects)
    {
        $curriculum = array();
        $numYears = 3;
        $numQuartiles = 4;
        $counter = 0;

        for ($year = 1; $year <= $numYears; $year++) {

            $quartileSubjects = array();
            for ($quartile = 1; $quartile <= $numQuartiles; $quartile++) {

                array_push($quartileSubjects, $subjects[$counter++]);

            }

            array_push($curriculum, $quartileSubjects);

        }

        return $curriculum;

    }

    public function getProgramId($type, $programSlug)
    {
        $statement = $this->PDO->prepare("SELECT id FROM programs WHERE type = ? AND slug = ?");
        $statement->bindParam(1, $type);
        $statement->bindParam(2, $programSlug);

        return $this->getFirst($statement, 'program')['id'];
    }

    private function getFirst(PDOStatement $statement, $type)
    {
        $statement->execute();

        $results = $statement->fetchAll(PDO::FETCH_ASSOC);
        if (count($results) !== 1) {
            throw new RuntimeException("Found no results for " . $type);
        }

        return $results[0];
    }

}