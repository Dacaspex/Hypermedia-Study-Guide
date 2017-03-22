<?php

class Page
{
    private $id;
    private $parentId;
    private $name;
    private $type;

    function __construct($id, $parentId, $name, $type)
    {
        $this->id = $id;
        $this->parentId = $parentId;
        $this->name = $name;
        $this->type = $type;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getParentId()
    {
        return $this->parentId;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getType()
    {
        return $this->type;
    }
}