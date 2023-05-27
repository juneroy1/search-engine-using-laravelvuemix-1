<?php

namespace App\Repositories;

use App\Contracts\Color\ColorRepositoryInterface;
use App\Models\ColorModel;
class EloquentColorRepository implements  ColorRepositoryInterface
{
    public function create(array $data)
    {
        // get all data
        $data['name'] = $data['first_name'].' '. $data['last_name'];
        $data['password'] = '';

        // create user
        return ColorModel::create($data);
    }

    public function update($id, array $data)
    {
        $user = ColorModel::findOrFail($id);
        $user->update($data);

        return $user;
    }

    public function delete($id)
    {
        return ColorModel::destroy($id);
    }
}
