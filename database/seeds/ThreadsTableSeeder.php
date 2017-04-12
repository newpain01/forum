<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\User;
use App\Channel;

class ThreadsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $users = User::pluck('id');
        $channels = Channel::pluck('id');

     	foreach (range(1, 30) as $index) {
        	App\Thread::create([
        		'user_id'	 => $users->random(),
        		'channel_id' => $channels->random(),
        		'title' 	 => $faker->sentence(2),
        		'body' 		 => $faker->sentence(50)
    		]); 
		} 
    }
}
