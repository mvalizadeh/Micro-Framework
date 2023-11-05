<?php

namespace App\Models;

use PDO;
use PDOException;

class MysqlModel extends BaseModel
{
    public function __constrcut()
    {
        try {
            $this->connection = new PDO("mysql:host={$_ENV['DB_HOST']};dbname={$_ENV['DB_NAME']}", $_ENV['DB_USER'], $_ENV['DB_PASS']);
            // set the PDO error mode to exception
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Connected successfully";
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }

    #create
    public function create(array $data): int{}
    #read
    public function find(int $id): object{}
    public function get(array $columns, array $where = []): array{}
    #update
    public function update(int $id, array $where): int{}
    #delete
    public function delete(array $where): int{}
}
