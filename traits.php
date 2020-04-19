<?php

trait ConverterTrait
{
    public function toArray()
    {
        return get_object_vars($this);
    }

    public function toJson()
    {
        return json_encode($this->toArray());
    }
}

class Movie
{
    use ConverterTrait;

    public $title;
    public $genre;
}

class Person
{
    use ConverterTrait;

    private $name;
    private $age;
}

$person = new Person();
var_dump($person->toArray());
var_dump($person->toJson());