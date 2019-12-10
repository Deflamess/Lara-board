<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function show() {
        $posts = [
            'my-first-post' => 'My first post wow',
            'my-second-post' => 'My second post wow'
        ];

        /*if (! array_key_exists($post, $posts)) {
            return abort(404, "Sorry, $post not found");
        }*/

        return view('post', [
                'post' => $posts['my-first-post'],
            ]);
    }
}
