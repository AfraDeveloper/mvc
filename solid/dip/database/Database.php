<?php


include_once "DatabaseInterface.php";

class Database
{
        public $database;
        public function __construct(DatabaseInterface $database)
        {
            $this->database=$database;
        }

        public function connection(){
            $this->database->connect();
        }
}