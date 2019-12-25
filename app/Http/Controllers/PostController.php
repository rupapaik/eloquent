<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use\App\Post;
class PostController extends Controller
{
  public function index(){
   $post=Post::all();
/*
    //........ belongsTo many join with query builder......

    $post=DB::table('posts')
    ->join('categories','posts.category_id','categories.id')
    ->join('users','posts.user_id','users.id')
    ->get();
*/
    return view('post',compact('post'));
  }
  public function post($id=0){
    $posts=DB::table('posts')
    ->join('categories','posts.category_id','categories.id')
    ->join('users','posts.user_id','users.id')
    ->where('user_id',$id)
    ->get();
  //  echo "<pre>";
  //  print_r($posts);
  return view('user_post',compact('posts'));
  }
}
