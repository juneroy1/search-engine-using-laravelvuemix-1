<?php


namespace App\Contracts\Movie;

interface MovieServiceInterface {

    public function createAnimal(array $data);
    public function updateAnimal($id, array $data);
    public function deleteAnimal($id);
}
