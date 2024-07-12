<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Str;

class GetRandomUsers extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'random_user:get';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Get 20 random user';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $response = Http::randomuser()->get('?results=20');
        if($response->successful())
        {
            $users = $response->json();
            foreach ($users['results'] as $key => $user)
            {
                $newuser = User::updateOrCreate([
                    'uuid'      => $user['login']['uuid']
                ],
                [
                    'Gender'    => $user['gender'],
                    'Name'      => json_encode($user['name']),
                    'Location'  => json_encode($user['location']),
                    'age'       => $user['dob']['age'],
                ]);
            }
        }

        $male = User::where('Gender','male')->count();
        $female = User::where('Gender','female')->count();

        $male_average_age = (!empty($male))?(User::where('Gender','male')->sum('age') / $male) : 0;
        $female_average_age = (!empty($female))?(User::where('Gender','female')->sum('age') / $female) : 0;


        $redis = Redis::connection();
        $redis->set('HourlyRecord',json_encode([
            'male' => $male ?? 0,
            'male_average_age' => $male_average_age ? (int)$male_average_age : 0,

            'female'=> $female ?? 0,
            'female_average_age' => $female_average_age ? (int)$female_average_age : 0,
        ]));

        return Command::SUCCESS;
    }
}
