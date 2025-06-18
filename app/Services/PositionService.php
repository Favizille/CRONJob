<?php
namespace App\Services;

use App\Models\User;
use App\Models\Position;
use Illuminate\Support\Carbon;
use App\Notifications\NewPositionNotification;

class PositionService
{

    public function create(array $data): Position
    {
        $position  = Position::create($data);

        $admin = User::where('email', 'emeka@email.com')->first();

        if($admin){
           $admin->notify(new NewPositionNotification($position));
        }

        return $position;
    }

    public function expireStale(): int
    {
        return Position::where('status', 'pending')
            ->where('created_at', '<', Carbon::now()->subDays(7))
            ->update(['status' => 'expired']);
    }
}
