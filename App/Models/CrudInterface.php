<?php

namespace App\Models;


interface CrudInterface
{
    #create
    public function create(array $data): int;
    #read
    public function find(int $id): object;
    public function get(array $columns, array $where = []): array;
    #update
    public function update(int $id, array $where): int;
    #delete
    public function delete(array $where): int;
}
