<?php

namespace App\Http\Controllers;

use App\Models\post;


use Illuminate\Http\Request;

class postController extends Controller
{
    public function show(post $post)
    {
       

        return view('post', compact('post'));
    }
}
