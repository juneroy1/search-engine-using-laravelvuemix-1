<?php

namespace App\Contracts;

interface UserRepositoryInterface
{
    public function create(array $data);

    public function update($id, array $data);

    public function delete($id);
}


?>