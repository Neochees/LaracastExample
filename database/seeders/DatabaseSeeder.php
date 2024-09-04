<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        User::truncate();
        Post::truncate();
        Category::truncate();

         $user = User::factory()->create();

         $personal = Category::create([
             'name' => 'Personal',
             'slug' => 'personal'
         ]);

        $work = Category::create([
            'name' => 'Work',
            'slug' => 'work'
        ]);

        $family = Category::create([
            'name' => 'Family',
            'slug' => 'family'
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $personal->id,
            'title' => 'My Personal Post',
            'slug' => 'my-personal-post',
            'excerpt' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>',
            'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse cursus fringilla est, a maximus nibh. Proin gravida leo quis lectus vehicula aliquam. Etiam mollis ipsum sed enim lacinia, nec vulputate dui dignissim. Proin a leo id sem finibus vestibulum. Nulla vel enim sed nulla volutpat pretium et eget turpis. Maecenas pharetra fringilla velit ac rhoncus. Praesent vulputate, eros ac rutrum consequat, nunc ante porta felis, eu dapibus eros justo ac metus. Curabitur cursus, ex eu porttitor sagittis, nunc lacus malesuada ex, et aliquam ipsum ex a arcu. Pellentesque mauris purus, aliquet nec sollicitudin et, sagittis non tellus. Praesent porta est et justo bibendum porttitor. Curabitur ex mi, varius a pulvinar ut, tincidunt at ante. Donec condimentum elit vitae tempor faucibus. In venenatis placerat gravida. Quisque eleifend lacus vel lorem molestie, quis hendrerit magna mattis. Duis egestas condimentum lectus, nec consequat mauris viverra sed.</p>'
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $work->id,
            'title' => 'My Work Post',
            'slug' => 'my-work-post',
            'excerpt' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>',
            'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse cursus fringilla est, a maximus nibh. Proin gravida leo quis lectus vehicula aliquam. Etiam mollis ipsum sed enim lacinia, nec vulputate dui dignissim. Proin a leo id sem finibus vestibulum. Nulla vel enim sed nulla volutpat pretium et eget turpis. Maecenas pharetra fringilla velit ac rhoncus. Praesent vulputate, eros ac rutrum consequat, nunc ante porta felis, eu dapibus eros justo ac metus. Curabitur cursus, ex eu porttitor sagittis, nunc lacus malesuada ex, et aliquam ipsum ex a arcu. Pellentesque mauris purus, aliquet nec sollicitudin et, sagittis non tellus. Praesent porta est et justo bibendum porttitor. Curabitur ex mi, varius a pulvinar ut, tincidunt at ante. Donec condimentum elit vitae tempor faucibus. In venenatis placerat gravida. Quisque eleifend lacus vel lorem molestie, quis hendrerit magna mattis. Duis egestas condimentum lectus, nec consequat mauris viverra sed.</p>'
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $family->id,
            'title' => 'My Family Post',
            'slug' => 'my-family-post',
            'excerpt' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>',
            'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse cursus fringilla est, a maximus nibh. Proin gravida leo quis lectus vehicula aliquam. Etiam mollis ipsum sed enim lacinia, nec vulputate dui dignissim. Proin a leo id sem finibus vestibulum. Nulla vel enim sed nulla volutpat pretium et eget turpis. Maecenas pharetra fringilla velit ac rhoncus. Praesent vulputate, eros ac rutrum consequat, nunc ante porta felis, eu dapibus eros justo ac metus. Curabitur cursus, ex eu porttitor sagittis, nunc lacus malesuada ex, et aliquam ipsum ex a arcu. Pellentesque mauris purus, aliquet nec sollicitudin et, sagittis non tellus. Praesent porta est et justo bibendum porttitor. Curabitur ex mi, varius a pulvinar ut, tincidunt at ante. Donec condimentum elit vitae tempor faucibus. In venenatis placerat gravida. Quisque eleifend lacus vel lorem molestie, quis hendrerit magna mattis. Duis egestas condimentum lectus, nec consequat mauris viverra sed.</p>'
        ]);
    }
}
