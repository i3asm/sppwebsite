<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class news extends Controller
{
    function show($post) {

        $posts=[
            'first' => 'my first news, i\'m alive !!',
            'second' => 'How are you doin`'
        ];
        if (!array_key_exists($post, $posts)){
            abort(404);
        }

        return view("news",[
            'post' => $posts[$post]
        ]);
    }
}
