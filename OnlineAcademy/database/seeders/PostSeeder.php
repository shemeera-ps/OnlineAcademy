<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;
class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories=Category::all();
        foreach($categories as $category){
            Post::create([
                'category_id'=>$category->id,
                'name'=>fake()->sentences(3,true),
                'short_description'=>fake()->paragraphs(2,true),
                'long_description'=>fake()->paragraphs(8,true),
                'image'=>'post.jpg',
            ]);
        }
    }
}
