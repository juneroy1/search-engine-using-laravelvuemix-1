<?php


namespace App\Contracts;

interface UserServiceInterface
{
    public function createUser(array $data);

    public function updateUser($id, array $data);

    public function deleteUser($id);
}


?>