<?php

namespace App\Contracts\Color;
interface ColorRepositoryInterface {

    public function create(array $data);

    public function update($id, array $data);

    public function delete($id);
}



?>
