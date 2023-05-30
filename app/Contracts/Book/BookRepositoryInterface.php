<?php


namespace App\Contracts\Book;

interface BookRepositoryInterface {
    public function create(array $data);
    public function update($id, array $data);
    public function delete($id);
}
