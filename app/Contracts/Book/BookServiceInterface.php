<?php


namespace App\Contracts\Book;

interface BookServiceInterface {

    public function createAnimal(array $data);
    public function updateAnimal($id, array $data);
    public function deleteAnimal($id);
}
