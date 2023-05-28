<?php

namespace App\Contracts\Color;
interface ColorServiceInterface {

    public  function createColor(array $data);

    public function updateColor($id, array $data);

    public function deleteColor($id);
}
?>
