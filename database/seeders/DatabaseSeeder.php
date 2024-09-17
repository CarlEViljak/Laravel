<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    
    public function run()
    {
        User::truncate();
        Post::truncate();
        Category::truncate();

        Post::factory(5)->create();

        // $user = User::factory()->create();

        // $personal = Category::create([
        //     'name' => 'Personal',
        //     'slug' => 'personal'
        // ]);

        // $family = Category::create([
        //     'name' => 'Family',
        //     'slug' => 'family'
        // ]);

        // $work = Category::create([
        //     'name' => 'Work',
        //     'slug' => 'work'
        // ]);

        // Post::create([
        //     'user_id' => $user->id,
        //     'category_id' => $family->id,
        //     'title' => 'My Family Post',
        //     'slug' => 'my-first-post',
        //     'excerpt' => '<p>Lorem ipsum</p>',
        //     'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam commodo a lacus vitae suscipit. Pellentesque nec facilisis nisi, in consectetur quam. Cras eu lorem ut nisi euismod rutrum et at velit. Integer vitae elit posuere mauris pulvinar ornare id non massa. Suspendisse suscipit hendrerit nunc, a cursus tortor pellentesque in. Quisque quis arcu ornare, ullamcorper tellus sit amet, convallis mauris. Suspendisse velit ex, vehicula ut augue ut, scelerisque consequat ante. Quisque eu porttitor tortor, ac tristique mauris. Ut eget augue tempor, auctor eros id, dignissim leo. Fusce non viverra odio. Maecenas elit odio, pharetra vitae dapibus a, aliquet eget libero.</p>',
        // ]);

        // Post::create([
        //     'user_id' => $user->id,
        //     'category_id' => $work->id,
        //     'title' => 'My Work Post',
        //     'slug' => 'my-second-post',
        //     'excerpt' => '<p>Lorem ipsum</p>',
        //     'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam commodo a lacus vitae suscipit. Pellentesque nec facilisis nisi, in consectetur quam. Cras eu lorem ut nisi euismod rutrum et at velit. Integer vitae elit posuere mauris pulvinar ornare id non massa. Suspendisse suscipit hendrerit nunc, a cursus tortor pellentesque in. Quisque quis arcu ornare, ullamcorper tellus sit amet, convallis mauris. Suspendisse velit ex, vehicula ut augue ut, scelerisque consequat ante. Quisque eu porttitor tortor, ac tristique mauris. Ut eget augue tempor, auctor eros id, dignissim leo. Fusce non viverra odio. Maecenas elit odio, pharetra vitae dapibus a, aliquet eget libero.</p>',
        // ]);
    }
}
