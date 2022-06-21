<?php

namespace App\Http\Controllers;

use App\Models\post;
use compact;

use DB;
use App\Models\category;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $categories = category::all();
        $category_id=null;
        $posts = post::when(request($category_id),function($query) {
                $query->where('category_id', request('category_id'));

            }) 
             ->latest()
             ->get();


        return view('index',compact('categories','posts'));
    }
}
