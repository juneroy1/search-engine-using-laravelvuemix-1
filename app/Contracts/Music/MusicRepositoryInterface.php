<?php


namespace App\Contracts\Music;

interface MusicRepositoryInterface
{
    public function create(array $data);

    public function update($id, array $data);

    public function delete($id);
}
