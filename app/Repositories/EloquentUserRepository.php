<?php

namespace App\Repositories;

use App\Contracts\UserRepositoryInterface;
use App\Models\User;

class EloquentUserRepository implements UserRepositoryInterface
{
    public function create(array $data)
    {
        // get all data
        $data['name'] = $data['first_name'].' '. $data['last_name'];
        $data['password'] = '';

        // create user
        return User::create($data);
    }

    public function update($id, array $data)
    {
        $user = User::findOrFail($id);
        $user->update($data);

        return $user;
    }

    public function delete($id)
    {
        return User::destroy($id);
    }
}


?>