<?php


namespace App\Contracts\Music;

interface MusicServiceInterface
{

    public function createAnimal(array $data);

    public function updateAnimal($id, array $data);

    public function deleteAnimal($id);
}
