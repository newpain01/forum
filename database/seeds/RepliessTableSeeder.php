<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\User;
use App\Thread;

class RepliessTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker	 = Faker::create();
        $users 	 = User::pluck('id');
        $threads = Thread::pluck('id');

     	foreach (range(1, 30) as $index) {
        	App\Reply::create([
        		'thread_id' => $threads->random(),
        		'user_id'	=> $users->random(),
        		'body' 		=> $faker->sentence(10)
    		]); 
		}
    }
}
