<?php
namespace App\Services;

use App\Models\Position;
use Illuminate\Support\Carbon;

class PositionService
{
    public function create(array $data): Position
    {
        return Position::create($data);
    }

    public function expireStale(): int
    {
        return Position::where('status', 'pending')
            ->where('created_at', '<', Carbon::now()->subDays(7))
            ->update(['status' => 'expired']);
    }
}
