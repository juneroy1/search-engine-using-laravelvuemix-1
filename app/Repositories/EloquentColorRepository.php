<?php

namespace App\Repositories;

use App\Contracts\Color\ColorRepositoryInterface;
use App\Models\ColorModel;
class EloquentColorRepository implements  ColorRepositoryInterface
{
    public function create(array $data)
    {
        // create color
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
