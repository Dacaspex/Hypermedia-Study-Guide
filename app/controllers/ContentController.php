<?php

/**
* Content controller to handle the content table in the data base.
* Contains all content for the bachelors, pre-masters and masters.
*/
class ContentController
{

	private $PDO;
	
	function __construct($PDO)
	{
		$this->PDO = $PDO;
	}

	function index($programSlug, $pageSlug)
	{

		return 'hoi';

		// Prepare query
		$stmt = $this->PDO->prepare("SELECT * FROM content WHERE program_id = (SELECT id FROM programs WHERE slug = :programSlug) AND page_id = (SELECT id FROM pages WHERE slug = :pageSlug)");
		$stmt->bindValue(':programSlug', $programSlug);
		$stmt->bindValue(':pageSlug', $pageSlug);
		$stmt->execute();

		// Grab data from row and create model
		while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {

			$id = $row['id'];
			$programId = $row['program_id'];
			$pageId = $row['page_id'];
			$body = $row['body'];
			$createdAt = $row['created_at'];
			$updatedAt = $row['updated_at'];

			$content = new Content($id, $programId, $pageId, $body, $createdAt, $updatedAt);

			return $content;

		}

	}
}