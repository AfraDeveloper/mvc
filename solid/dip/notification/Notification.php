<?php

namespace mvc\solid\dip;

class Notification
{
        public $message;
        public function __construct(MessageInterface $messgae)
        {
            $this->message=$messgae;
        }

        public function send(){
            return $this->message->send();
        }
}