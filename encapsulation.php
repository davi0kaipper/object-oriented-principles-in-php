<?php

class Person
{
    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function job()
    {
        return "Plumber";
    }

    public function favoriteTeam()
    {
        return "Mets";
    }

    private function thingsThatKeepUpAtNight()
    {
       return "There's no way to absolutly prove philosophical truths.";
    }
}

$bob = new Person("Bob");

var_dump($bob->job()); // Plumber
var_dump($bob->favoriteTeam()); // Mets
var_dump($bob->thingsThatKeepUpAtNight()); //  Call to private method Person::thingsThatKeepUpAtNight()
