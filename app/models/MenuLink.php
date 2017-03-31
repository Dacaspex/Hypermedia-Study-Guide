<?php

class MenuLink extends Link
{
    private $id;

    /**
     * @var PDO
     */
    private $pdo;

    /**
     * MenuLink constructor.
     * @param PDO $pdo
     * @param $id
     * @param $name
     * @param $destination
     */
    public function __construct(PDO $pdo, $id, $name, $destination)
    {
        parent::__construct($name, $destination);
        $this->id = $id;
        $this->pdo = $pdo;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    public function getChildren()
    {
        $statement = $this->pdo->prepare("SELECT * FROM pages WHERE parent_id = ?");
        $statement->bindParam(1, $this->id);
        $statement->execute();

        $results = $statement->fetchAll(PDO::FETCH_ASSOC);

        return array_map(function($result) {
            return new MenuLink(
                $this->pdo,
                $result['id'],
                Language::getLocale() === Language::EN ? $result['name_en'] : $result['name_nl'],
                $result['slug']
            );
        }, $results);
    }
}