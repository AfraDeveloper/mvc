<?php

namespace App\Models\Contract;

abstract class Model implements CrudInterface
{
    protected $connection;
    protected $tabel;
    protected $primaryKey="id";
    protected $attributes=[];

    public function __construct()
    {
        
    }

    public function getAttribute($key)
    {
        if(!$key || array_key_exists($key,$this->attributes)){
             return null;
        }
        return $this->attributes[$key];

    }

    public function __get(string $key)
    {
        return $this->getAttribute($key);
    }
}