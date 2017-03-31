<?php

class Link
{
    private $name;
    private $destination;

    function __construct($name, $destination)
    {
        $this->name = $name;
        $this->destination = $destination;
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