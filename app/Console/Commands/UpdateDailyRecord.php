<?php

namespace App\Console\Commands;

use App\Models\DailyRecord;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Redis;

class UpdateDailyRecord extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'daily_record:update';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Updating daily record';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $redis = Redis::connection();
        $record = $redis->get('HourlyRecord');
        $hourly_record = json_decode($record);

        $daily_record = DailyRecord::firstOrCreate([
            'date' => Carbon::now()->format('Y-m-d')
        ],[
            'male_count'    => $hourly_record->male ?? 0,
            'female_count'  => $hourly_record->female ?? 0,
            'male_avg_age'  => $hourly_record->male_average_age ?? 0,
            'female_avg_age'=> $hourly_record->female_average_age ?? 0,
        ]);

        return Command::SUCCESS;
    }
}
