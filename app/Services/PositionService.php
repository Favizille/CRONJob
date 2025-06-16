<?php
namespace App\Services;

use App\Models\Position;

class PositionService
{
    public function create(array $data): Position
    {
        return Position::create($data);
    }
}
