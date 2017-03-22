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

    public function getCurriculum($programSlug)
    {
        $programId = $this->getProgramId($programSlug);
        $statement = $this->PDO->prepare("SELECT * FROM curriculi WHERE ");

        return null;
    }

    public function getProgramId($programSlug)
    {
        $statement = $this->PDO->prepare("SELECT id FROM programs WHERE slug = ?");
        $statement->bindParam(1, $programSlug);

        return $this->getFirst($statement, 'Program');
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