<?php

class SearchController
{
    /**
     * @var PDO
     */
    private $pdo;

    /**
     * @var \League\Plates\Engine
     */
    private $templates;

    public function __construct(\League\Plates\Engine $templates, PDO $pdo)
    {
        $this->pdo = $pdo;
        $this->templates = $templates;
    }

    public function runSearch()
    {
        if (!isset($_GET['query'])) {
            $this->templates->render('search', ['pages' => []]);
        }

        $query = $_GET['query'];

        $parameters = $this->prepParameters($query);

        $statement = $this->pdo->prepare("SELECT body, pages.slug AS page_slug, pages.name_en AS page_name_en, pages.name_nl AS page_name_nl, programs.name AS program_name, programs.slug AS program_slug, programs.type AS program_type FROM content c JOIN pages on c.page_id = pages.id JOIN programs on c.program_id = programs.id WHERE MATCH(body) AGAINST(?)");
        $statement->bindParam(1, $parameters);
        $statement->execute();

        $results = $statement->fetchAll(PDO::FETCH_ASSOC);
        $pages = $this->mapResults($results);

        return $this->templates->render('search', compact('pages', 'query'));
    }

    private function prepParameters($parameter)
    {
        $parts = explode(' ', $parameter);
        $parts = array_map(function($el) {
            return '+' . trim($el);
        }, $parts);

        return implode(' ', $parts);
    }

    private function mapResults(array $results)
    {
        return array_map(function($result) {
            $linkName = $result['program_name'];

            switch (Language::getLocale()) {
                case Language::EN:
                    $linkName = $result['page_name_en'] . ' | ' . $linkName;
                    break;
                case Language::NL:
                    $linkName = $result['page_name_nl'] . ' | ' . $linkName;
                    break;
            }

            $destination = "/{$result['program_type']}/{$result['program_slug']}/{$result['page_slug']}";

            $link = new Link(
                null,
                $linkName,
                $destination
            );

            return new SearchResult($link, $result['body']);
        }, $results);
    }
}