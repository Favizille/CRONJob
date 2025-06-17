<?php

namespace App\Console\Commands;

use App\Facades\PositionFacade;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;

class ExpireStalePositions extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'positions:expire-stale-positions';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Expires positions that are still pending after 7 days';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $expiredCount = PositionFacade::expireStale();
        $this->info("Expired {$expiredCount} stale position(s).");
        Log::info("Expired {$expiredCount} stale position(s) via scheduler.");
        return Command::SUCCESS;
    }
}
