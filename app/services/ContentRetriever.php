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
     * @param string $type The type of program: program, pre-master, master
     * @param string $programSlug
     * @param string $pageSlug
     * @param string $locale
     * @return Content
     * @throws RuntimeException If the page was not found.
     */
    public function getPageContent($type, $programSlug, $pageSlug, $locale)
    {
        $program = $this->getProgram($type, $programSlug);
        $page = $this->getPage($pageSlug, $program->getType());

        return $this->getContent($page, $program, $locale);
    }

    /**
     * Get the program associated with a certain slug.
     *
     * @param string $type type of program: program, pre-master, master
     * @param string $slug
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
            $result['slug'],
            $result['type'],
            $result['num_students'],
            $result['num_courses'],
            $result['num_grads'],
            $result['contact'],
            $this->getProgramLinks($result['id'])
        );
    }

    /**
     * Get all links for a certain progarm id.
     *
     * @param $id
     * @return array
     */
    private function getProgramLinks($id)
    {
        $statement = $this->pdo->prepare("SELECT * FROM links WHERE program_id = ?");
        $statement->bindParam(1, $id);
        $statement->execute();

        return array_map(function($result) {
            return new Link(
                Language::getLocale() === Language::EN ? $result['name_en'] : $result['name_nl'],
                $result['destination']
            );
        }, $statement->fetchAll(PDO::FETCH_ASSOC));
    }

    /**
     * Get the page associated with a certain slug.
     *
     * @param $slug
     * @return Page
     * @throws RuntimeException If no page was found for this slug.
     */
    private function getPage($slug, $type)
    {
        $statement = $this->pdo->prepare("SELECT * FROM pages WHERE slug = ? AND type = ?");
        $statement->bindParam(1, $slug);
        $statement->bindParam(2, $type);

        $result = $this->getFirst($statement, "page");

        return new Page(
            $result['id'],
            $result['parent_id'],
            Language::getLocale() === Language::EN ? $result['name_en'] : $result['name_nl'],
            $result['type']
        );
    }

    /**
     * Get the content that the specified program has for this course.
     *
     * @param Page $page
     * @param Program $program
     * @param string $locale
     * @return Content
     * @throws RuntimeException If no content was found for this page.
     */
    private function getContent(Page $page, Program $program, $locale)
    {
        $statement = $this->pdo->prepare("SELECT * FROM content WHERE program_id = ? AND page_id = ? AND lang = ?");
        $programId = $program->getId(); // Fix for the 'pass variables by reference' error
        $pageId = $page->getId();
        $statement->bindParam(1, $programId, PDO::PARAM_INT);
        $statement->bindParam(2, $pageId, PDO::PARAM_INT);
        $statement->bindParam(3, $locale);

        try {
            $result = $this->getFirst($statement, "content");
        } catch (Exception $e) {
            $result = [
                'id' => null,
                'body' => ''
            ];
        }

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