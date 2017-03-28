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
        echo "test";
        $programId = $this->getProgramId($type, $programSlug);
        $statement = $this->PDO->prepare("SELECT * FROM curriculi WHERE program_id = ? ORDER BY year ASC, quarter ASC");
        $statement->bindParam(1, $programId);
        $statement->execute();

        $results = $statement->fetchAll(PDO::FETCH_ASSOC);
        var_dump($results);

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