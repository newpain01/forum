<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Eloquent::unguard();

	    App\User::truncate();
	    App\Channel::truncate();
	    App\Thread::truncate();
	    App\Reply::truncate();

        $this->call(UsersTableSeeder::class);
        $this->call(ChannelsTableSeeder::class);
        $this->call(ThreadsTableSeeder::class);
        $this->call(RepliessTableSeeder::class);

    }
}
