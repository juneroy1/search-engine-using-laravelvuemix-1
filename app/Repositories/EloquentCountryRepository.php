<?php


namespace App\Repositories;

use App\Contracts\Animal\AnimalRepositoryInterface;
use App\Models\AnimalModel;

class EloquentCountryRepository implements AnimalRepositoryInterface {

    public function create(array $data)
    {
        // TODO: Implement create() method.
        return AnimalModel::create($data);
    }

    public function update($id, array $data)
    {
        // TODO: Implement update() method.
        $animal = AnimalModel::findOrFail($id);
        $animal->update($data);

        return $animal;
    }

    public function delete($id)
    {
        // TODO: Implement delete() method.
        return AnimalModel::destroy($id);
    }

}
