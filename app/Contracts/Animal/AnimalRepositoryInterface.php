<?php


namespace App\Contracts\Animal;

interface AnimalRepositoryInterface {
    public function create(array $data);
    public function update($id, array $data);
    public function delete($id);
}
