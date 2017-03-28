<?php

class HomeController
{
    private $templates;
    private $PDO;

    function __construct(\League\Plates\Engine $templates, $PDO)
    {
        $this->templates = $templates;
        $this->PDO = $PDO;
    }

    public function index()
    {
        $programs = self::getPrograms($this->PDO);

        return $this->templates->render('home', compact('programs'));
    }

    public static function getPrograms(PDO $pdo)
    {
        $stmt = $pdo->prepare("SELECT `name`, `type` FROM `programs`");
        $stmt->execute();

        $bachelors = array();
        $preMasters = array();
        $masters = array();

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {

            switch ($row['type']) {

                case 'Bachelor':
                    array_push($bachelors, $row['name']);
                    break;

                case 'Pre Master':
                    array_push($preMasters, $row['name']);
                    break;

                case 'Master':
                    array_push($masters, $row['name']);
                    break;

            }
        }

        return $programs = array(
            'bachelors' => $bachelors,
            'preMaster' => $preMasters,
            'masters' => $masters
        );
    }
}