<?php

namespace App\Models\Contract;
use Medoo\Medoo;
use PDO;
class MysqlBaseModel extends  Model
{


    public function __construct($id=null)
    {

        $database = new Medoo([
            // [required]
            'type' => 'mysql',
            'host' => $_ENV['DB_HOST'],
            'database' => $_ENV['DB_NAME'],
            'username' => $_ENV['DB_USER'],
            'password' => $_ENV['DB_PASSWORD'],

            // [optional]
            'charset' => 'utf8',
            'collation' => 'utf8_general_ci',
            'port' => 3306,
            'prefix' => '',
            'logging' => true,
            'error' => PDO::ERRMODE_EXCEPTION,
            'option' => [
                PDO::ATTR_CASE => PDO::CASE_NATURAL
            ],
        ]);

        if(!is_null($id)){
            return $this->find($id);
        }
    }

    public function create(array $data): int
    {
       return 1;
    }

    public function find(int $id): object
    {
       return (object)[];
    }

    public function all($table): array
    {
       return [];
    }

    public function get(array $columns, array $where): array
    {
        return [];
    }

    public function update(array $data, array $where): int
    {
        return 0;
    }

    public function delete(array $where): int
    {
        return 0;
    }
}