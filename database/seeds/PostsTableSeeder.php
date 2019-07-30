<?php

use Illuminate\Database\Seeder;
use App\Post;
use App\Category;
use Carbon\Carbon;
use App\Tag;
use Illuminate\Support\Facades\Storage;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Storage::disk('public')->deleteDirectory('posts');
      Post::truncate();
      Category::truncate();
      Tag::truncate();

      $category = new Category;
      $category->name = "Niselanea Wold";
      $category->save();

      $category = new Category;
      $category->name = "Tecnología Wold";
      $category->save();

      $post = new Post;
      $post->title = "Mi Primer Pots";
      $post->url = str_slug("Mi Primer Pots");
      $post->excerpt = "Extracto de mi primer post";
      $post->body = "<p>Contenido de mi primer post</p>";
      $post->published_at = Carbon::now()->subdays(4);
      $post->category_id = 1;
      $post->user_id = 1;
      $post->save();

      $post->tags()->sync(Tag::create(['name' => 'Tec Toch' ]));

      $post = new Post;
      $post->title = "Mi segundo Pots";
      $post->url = str_slug("Mi segundo Pots");
      $post->excerpt = "Extracto de mi segundo post";
      $post->body = "<p>Contenido de mi segundo post</p>";
      $post->published_at = Carbon::now()->subdays(3);
      $post->category_id = 1;
      $post->user_id = 1;
      $post->save();

      $post->tags()->sync(Tag::create(['name' => 'Sonic' ]));

      $post = new Post;
      $post->title = "Mi tercer Pots";
      $post->url = str_slug("Mi tercer Pots");
      $post->excerpt = "Extracto de mi tercer post";
      $post->body = "<p>Contenido de mi tercer post</p>";
      $post->published_at = Carbon::now()->subdays(2);
      $post->category_id = 2;
      $post->user_id = 2;
      $post->save();

      $post->tags()->sync(Tag::create(['name' => 'Alarm Right' ]));

      $post = new Post;
      $post->title = "Mi cuarto Pots";
      $post->url = str_slug("Mi cuarto Pots");
      $post->excerpt = "Extracto de mi cuarto post";
      $post->body = "<p>Contenido de mi cuarto post</p>";
      $post->published_at = Carbon::now()->subdays(1);
      $post->category_id = 2;
      $post->user_id = 2;
      $post->save();

      $post->tags()->sync(Tag::create(['name' => 'News Now' ]));
    }
}
