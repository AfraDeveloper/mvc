<?php
include_once "solid/dip/database/Database.php";
include_once "solid/dip/database/MongoDatabase.php";
include_once "solid/dip/database/MysqlDatabase.php";




//$db=new MongoDatabase();
$db=new MysqlDatabase();
$connect=new Database($db);
$connect->connection();




//include_once "solid/dip/notification/Email.php";
//include_once "solid/dip/notification/Sms.php";
//include_once "solid/dip/notification/Notification.php";
//use mvc\solid\dip\Notification;
//use mvc\solid\dip\Email;
//$message=new \mvc\solid\dip\Sms("text","from","to");
//$notification=new Notification($message);
//$notification->send();
