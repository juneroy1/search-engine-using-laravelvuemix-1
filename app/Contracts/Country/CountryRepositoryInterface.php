<?php

interface CountryRepositoryInterface {

    public  function createColor(array $data);

    public function updateColor($id, array $data);

    public function deleteColor($id);
}

?>
