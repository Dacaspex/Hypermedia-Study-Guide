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

    /**
     * Get the full content associated with a page.
     *
     * @param string $type The type of program: bachelor, pre-master, master
     * @param string $programSlug
     * @param string $pageSlug
     * @return Content
     * @throws RuntimeException If the page was not found.
     */
    public function getPageContent($type, $programSlug, $pageSlug)
    {
        $program = $this->getProgram($type, $programSlug);
        $page = $this->getPage($pageSlug);

        return $this->getContent($page, $program);
    }

    /**
     * Get the program associated with a certain slug.
     *
     * @param $type The type of program: bachelor, pre-master, master
     * @param $slug
     * @return Program
     * @throws RuntimeException If no program was found for this slug.
     */
    private function getProgram($type, $slug)
    {
        $statement = $this->pdo->prepare("SELECT * FROM programs WHERE slug = ? AND type = ?");
        $statement->bindParam(1, $slug);
        $statement->bindParam(2, $type);

        $result = $this->getFirst($statement, "program");

        return new Program(
            $result['id'],
            $result['name'],
            $result['type'],
            $result['num_students'],
            $result['num_courses'],
            $result['num_grads'],
            $result['contact'],
            [] // TODO: fetch the links as well
        );
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
        $statement->bindParam(1, $slug);

        $result = $this->getFirst($statement, "page");

        return new Page(
            $result['id'],
            $result['parent_id'],
            $result['name'],
            $result['type']
        );
    }

    /**
     * Get the content that the specified program has for this course.
     *
     * @param Page $page
     * @param Program $program
     * @return Content
     * @throws RuntimeException If no content was found for this page.
     */
    private function getContent(Page $page, Program $program)
    {
        $statement = $this->pdo->prepare("SELECT * FROM content WHERE program_id = ? AND page_id = ?");
        $statement->bindParam(1, $program->getId());
        $statement->bindParam(2, $page->getId());

        $result = $this->getFirst($statement, "content");

        return new Content(
            $result['id'],
            $program,
            $page,
            $result['body']
        );
    }

    /**
     * Get the first result from the st
     *
     * @param PDOStatement $statement
     * @param string $type
     * @return array
     * @throws RuntimeException If no results were found.
     */
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