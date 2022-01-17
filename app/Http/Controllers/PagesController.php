<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){

        $posts = Post::query()->where('isFeatured',true)->orderBy('sortOrder')->take(8)->get();
        return view('index', compact('posts'));
    }

}
