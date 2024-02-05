<?php
class Artist
{
    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    // GETTERS & SETTERS 
    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }
}
