<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostStoreController extends Controller
{
      public  function __invoke(Request $request)
          {
            $this->validate($request,[
                'title' => 'required',
                'body'
            ]);
            Post::create($request->only('title','body'));

            return back();
          }
}
