<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index(){
     //   
    }

    public function getAllPost(){
        $posts=DB::table('posts')->get();
        return view('posts',compact('posts'));
    }

    public  function addPost(){
        return view('add-post');
    }
    public function addPostSubmit(Request $request){
        DB::table('posts')->insert([
            'title'=>$request->title,
            'body'=>$request->body
        ]);
        return redirect()->route('post.getallpost')->with('post_created','post has been created successfully');
    }
    public function getPostById($id){
        $post=DB::table('posts')->where('id',$id)->first();
        return view('single-post',compact('post'));
    }
    public function deletePost($id){
        DB::table('posts')->where('id',$id)->delete();
        return back()->with('post_deleted','post has been deleted successfully');
    }
    public function editPost($id){
        $post=DB::table('posts')->where('id',$id)->first();
        return view('edit-post',compact('post'));
    }
    public function updatePost(Request $request){
        DB::table('posts')->where('id',$request->id)->update([
            'title'=>$request->title,
            'body'=>$request->body
        ]);
        return back()->with('post_updated','post has been updated successfully');
    }
}
