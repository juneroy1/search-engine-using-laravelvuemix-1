<?php


namespace App\Contracts\Movie;

interface MovieRepositoryInterface {
    public function create(array $data);
    public function update($id, array $data);
    public function delete($id);
}
