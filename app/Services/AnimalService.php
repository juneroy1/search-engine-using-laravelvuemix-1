<?php
namespace App\Services;

use App\Contracts\Animal\AnimalRepositoryInterface;
use App\Contracts\Animal\AnimalServiceInterface;

class AnimalService implements  AnimalServiceInterface {

    protected $animalRepository;

    public  function  __construct(AnimalRepositoryInterface $animalRepository)
    {
        $this->animalRepository = $animalRepository;
    }

    public function createAnimal(array $data){
        $this->animalRepository->create($data);
    }

    public function updateAnimal($id, array $data){
        $this->animalRepository->update($id, $data);
    }

    public function deleteAnimal($id){
        $this->animalRepository->delete($id);
    }

}
