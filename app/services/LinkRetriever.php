<?php

class LinkRetriever
{
    /**
     * @var PDO
     */
    private $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function getMenuLinks(Program $program)
    {
        $type = $program->getType();

        $statement = $this->pdo->prepare("SELECT * FROM pages WHERE type = ?");
        $statement->bindParam(1, $type);

        $statement->execute();
        $results = $statement->fetchAll(PDO::FETCH_ASSOC);

        $links = [];
        foreach ($results as $result) {
            $links[] = new Link(
                $result['id'],
                Language::getLocale() === Language::EN ? $result['name_en'] : $result['name_nl'],
                $result['slug']
            );
        }

        return $links;
    }
}