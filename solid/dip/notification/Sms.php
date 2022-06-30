<?php

namespace mvc\solid\dip;

class Sms implements MessageInterface
{
    public $text,$from,$to;

    public function __construct(string $text,string $from,string $to)
    {
        $this->text = $text;
        $this->to=$to;
        $this->from=$from;
    }

    public function send():void
    {
        echo "send Sms";
    }
}