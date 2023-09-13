<?php

namespace App\Http\Controllers;

use App\Http\Resources\PostResource;
use App\Models\Post;
use Illuminate\Http\Request;

class PostIndexController extends Controller
{
       public  function __invoke()
           {
               $posts = PostResource::collection(Post::latest()->get());
            return inertia()->render('Posts/Index',[
                'posts' => $posts
            ]);
           }
}
