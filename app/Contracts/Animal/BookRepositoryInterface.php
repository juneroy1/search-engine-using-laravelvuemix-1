<?php


namespace App\Contracts\Animal;

interface BookRepositoryInterface {
    public function create(array $data);
    public function update($id, array $data);
    public function delete($id);
}
