<?php


namespace App\Repositories;

use App\Contracts\Animal\AnimalRepositoryInterface;
use App\Models\AnimalModel;

class EloquentAnimalRepository implements AnimalRepositoryInterface {

    public function create(array $data)
    {
        // TODO: Implement create() method.
        return AnimalModel::create($data);
    }

    public function update($id, array $data)
    {
        // TODO: Implement update() method.
    }

    public function delete($id)
    {
        // TODO: Implement delete() method.
    }

}
