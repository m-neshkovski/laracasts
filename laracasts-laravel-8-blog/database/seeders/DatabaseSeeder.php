<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        User::truncate();
        Category::truncate();
        Post::truncate();

        // $user = User::factory()->create();

        Post::factory(10)->create();

        // $personal = Category::create([
        //     'name' => 'Personal',
        //     'slug' => 'personal',
        // ]);

        // $work = Category::create([
        //     'name' => 'Work',
        //     'slug' => 'work',
        // ]);

        // $hobby = Category::create([
        //     'name' => 'Hobbies',
        //     'slug' => 'hobbies',
        // ]);

        // Post::create([
        //     'user_id' => $user->id,
        //     'category_id' => $personal->id,
        //     'title' => 'My Personal Post',
        //     'slug' => 'my-personal-post',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione ex totam porro pariatur laborum mollitia nostrum repellendus autem veniam illum soluta distinctio reiciendis beatae illo architecto assumenda, tempora eveniet sint. Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione ex totam porro pariatur laborum mollitia nostrum repellendus autem veniam illum soluta distinctio reiciendis beatae illo architecto assumenda, tempora eveniet sint. Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione ex totam porro pariatur laborum mollitia nostrum repellendus autem veniam illum soluta distinctio reiciendis beatae illo architecto assumenda, tempora eveniet sint.</p>',
        // ]);

        // Post::create([
        //     'user_id' => $user->id,
        //     'category_id' => $work->id,
        //     'title' => 'My Work Post',
        //     'slug' => 'my-work-post',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione ex totam porro pariatur laborum mollitia nostrum repellendus autem veniam illum soluta distinctio reiciendis beatae illo architecto assumenda, tempora eveniet sint. Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione ex totam porro pariatur laborum mollitia nostrum repellendus autem veniam illum soluta distinctio reiciendis beatae illo architecto assumenda, tempora eveniet sint. Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione ex totam porro pariatur laborum mollitia nostrum repellendus autem veniam illum soluta distinctio reiciendis beatae illo architecto assumenda, tempora eveniet sint.</p>',
        // ]);

        // Post::create([
        //     'user_id' => $user->id,
        //     'category_id' => $hobby->id,
        //     'title' => 'My Hobbies Post',
        //     'slug' => 'my-hobbies-post',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione ex totam porro pariatur laborum mollitia nostrum repellendus autem veniam illum soluta distinctio reiciendis beatae illo architecto assumenda, tempora eveniet sint. Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione ex totam porro pariatur laborum mollitia nostrum repellendus autem veniam illum soluta distinctio reiciendis beatae illo architecto assumenda, tempora eveniet sint. Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione ex totam porro pariatur laborum mollitia nostrum repellendus autem veniam illum soluta distinctio reiciendis beatae illo architecto assumenda, tempora eveniet sint.</p>',
        // ]);
    }
}
