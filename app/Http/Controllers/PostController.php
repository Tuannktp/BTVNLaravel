<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\post;

class PostController extends Controller
{
    /**
 * Display a listing of the resource.
 */
 public function index()
 {
 $posts = Post::all();
 return view("home", compact("posts"));
 }
    
}
