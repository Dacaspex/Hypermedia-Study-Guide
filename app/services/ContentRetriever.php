<?php

class ContentRetriever
{
    /**
     * @var PDO
     */
    private $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function getPageContent($programSlug, $pageSlug)
    {
        $program = $this->getProgram($programSlug);
        $page = $this->getPage($pageSlug);

        $content = $this->getContent($page->getId(), $program->getId());
    }

    /**
     * Get the program associated with a certain slug.
     *
     * @param $slug
     * @return Program
     * @throws RuntimeException If no program was found for this slug.
     */
    private function getProgram($slug)
    {
        $statement = $this->pdo->prepare("SELECT * FROM programs WHERE slug = ?");
        $statement->bindParam(0, $slug);

        $statement->execute();

        $results = $statement->fetchAll(PDO::FETCH_ASSOC);
        if (count($results) !== 1) {
            throw new RuntimeException("Found no results for the program '{$slug}'.");
        }

        // TODO: map results to Program Model
    }

    /**
     * Get the page associated with a certain slug.
     *
     * @param $slug
     * @return Page
     * @throws RuntimeException If no page was found for this slug.
     */
    private function getPage($slug)
    {
        $statement = $this->pdo->prepare("SELECT * FROM pages WHERE slug = ?");
        $statement->bindParam(0, $slug);

        $statement->execute();

        $results = $statement->fetchAll(PDO::FETCH_ASSOC);
        if (count($results) !== 1) {
            throw new RuntimeException("Found no results for the program '{$slug}'.");
        }

        // TODO: map results to Page Model
    }
}