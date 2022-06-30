<?php
include_once "DatabaseInterface.php";
class MongoDatabase implements DatabaseInterface
{

    public function connect()
    {
        echo "MongoDb Connect";
    }
}