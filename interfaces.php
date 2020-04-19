<?php

interface StorageConnector
{
    public function read($key);
}

class DatabaseConnector implements StorageConnector
{
    public function read ($key)
    {
        var_dump("Read $key from Database!");
    }
}

class FileConnector implements StorageConnector
{
    public function read ($key)
    {
        var_dump("Read $key from File System!");
    }
}

class User
{
    private $name;
    private $address;

    public function __construct(StorageConnector $sc)
    {
        $this->name = $sc->read('name');
        $this->address = $sc->read('address');
    }
}

$test = new StorageConnector();
$user1 = new User(new FileConnector());