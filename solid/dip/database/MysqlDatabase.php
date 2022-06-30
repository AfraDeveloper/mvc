<?php


include_once "DatabaseInterface.php";
class MysqlDatabase implements DatabaseInterface
{

    public function connect()
    {
       echo "mysql Connect";
    }
}