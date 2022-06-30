<?php
namespace mvc\solid\ocp;
class Notification
{
    public function send(string $type,array $params)
    {
        $class=ucfirst($type);
        if(class_exists($class)){
            (new $class)->send($params);
        }
    }


}


$notification=new Notification();
$notification->send("sms",["phone"=>"0930098089"]);
$notification->send("email",["email"=>"email@gmail.com"]);
$notification->send("telegram",["username"=>"@username"]);