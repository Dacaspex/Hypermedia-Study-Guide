<?php

class SearchResult
{
    private $link;

    private $body;

    /**
     * SearchResult constructor.
     * @param Link $link
     * @param $body
     */
    public function __construct(Link $link, $body)
    {
        $this->link = $link;
        $this->body = $body;
    }

    /**
     * @return mixed
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * @return mixed
     */
    public function getBody()
    {
        return $this->body;
    }
}