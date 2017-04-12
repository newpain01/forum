<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Str;
use App\Channel;

class ChannelsTableSeeder extends Seeder
{

   /**
	 * Create a channel slug.
	 *
	 * @param  string $name
	 * @return string
	 */
	    public function makeSlugFromName($name)
	    {
	        $slug = Str::slug($name);

	        $count = Channel::whereRaw("slug LIKE '^{$slug}(-[0-9]+)?$'")->count();

	        return $count ? "{$slug}-{$count}" : $slug;
	}


    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker = Faker::create();

     	foreach (range(1, 30) as $index) {
     		$name = $faker->word;
        	App\Channel::create([
        		'name' => $name,
        		'slug' => $this->makeSlugFromName($name)
    		]); 
		} 
    }
}
