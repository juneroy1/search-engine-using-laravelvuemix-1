<?php


namespace App\Contracts\Animal;

interface AnimalServiceInterface {

    public function createAnimal(array $data);
    public function updateAnimal($id, array $data);
    public function deleteAnimal($id);
}
