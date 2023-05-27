<?php

namespace App\Services;

use App\Contracts\Color\ColorRepositoryInterface;
use App\Contracts\Color\ColorServiceInterface;

class ColorService implements ColorServiceInterface
{
    protected $colorRepository;

    public function __construct(ColorRepositoryInterface $colorRepository)
    {
        $this->colorRepository = $colorRepository;
    }

    public function createColor(array $data)
    {
        return $this->colorRepository->create($data);
    }

    public function updateColor($id, array $data)
    {
        return $this->colorRepository->update($id, $data);
    }

    public function deleteColor($id)
    {
        return $this->colorRepository->delete($id);
    }
}
