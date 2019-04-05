<?php

use Illuminate\Database\Seeder;

use App\Post;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
 
        // Create 50 product records
        for ($i = 0; $i < 10; $i++) {
            
            $random = mt_rand(1, 4);
          
            $randomTitle = str_replace('.', ' ', $faker->sentence($nbWords = mt_rand(2, 6), $variableNbWords = true));
          
            $randomSlug = str_replace(' ', '-', strtolower($randomTitle));
            
            Post::create([
                'user_id' => $random,
                'slug' => $randomSlug,
                'category_id' => $random,
                'title' => str_replace('.', ' ', $faker->sentence($nbWords = mt_rand(2, 6), $variableNbWords = true)),
                'content' => $faker->paragraph,                
            ]);
      }
  }
  
}
