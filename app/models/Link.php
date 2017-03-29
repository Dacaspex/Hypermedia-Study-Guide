<?php

class Link
{
    private $id;
    private $name;
    private $destination;

    function __construct($id, $name, $destination)
    {
        $this->id = $id;
        $this->name = $name;
        $this->destination = $destination;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getDestination()
    {
        return $this->destination;
    }
}