<?php

include_once __DIR__ . '\..\models\Content.php';

/**
* Content controller to handle the content table in the data base.
* Contains all content for the bachelors, pre-masters and masters.
*/
class ContentController
{
    private $templates;

	private $PDO;
	
	function __construct(\League\Plates\Engine $templates, $PDO)
	{
        $this->templates = $templates;
		$this->PDO = $PDO;
	}

	function index($programSlug, $pageSlug)
	{

	    // Debug
        $content = new Content(1, 'Program name', 'Page name', 'Body', 'https://www.tue.nl/fileadmin/_processed_/0/6/csm__WH33865_purple_gradient_a3138296f6.png', 2, 3);
        return $this->templates->render('program', compact('content'));

		// Prepare query
		$stmt = $this->PDO->prepare("SELECT * FROM content WHERE program_id = (SELECT id FROM programs WHERE slug = :programSlug) AND page_id = (SELECT id FROM pages WHERE slug = :pageSlug)");
		$stmt->bindValue(':programSlug', $programSlug);
		$stmt->bindValue(':pageSlug', $pageSlug);
		$stmt->execute();

		$content = null;

		// Grab data from row and create model
		while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {

			$id = $row['id'];
			$programId = $row['program_id'];
			$pageId = $row['page_id'];
			$body = $row['body'];
			$createdAt = $row['created_at'];
			$updatedAt = $row['updated_at'];

			$content = new Content($id, $programId, $pageId, $body, $createdAt, $updatedAt);

		}

		return $this->templates->render('content', compact('content'));

	}
}