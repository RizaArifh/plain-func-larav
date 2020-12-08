<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Post;
use App\Models\Comment;

class PostController extends Controller
{
    public function index(){
     //   
    }

    public function getAllPost(){
        //using normalq
        // $posts=DB::table('posts')->get();

        //using eloquent
        $posts=Post::orderBy('id','desc')->get();
        return view('posts',compact('posts'));
    }

    public  function addPost(){
        return view('add-post');
    }
    public function addPostSubmit(Request $request){
        
        //using normalq
        // DB::table('posts')->insert([
        //     'title'=>$request->title,
        //     'body'=>$request->body
        // ]);

        //using eloquent
        $post= new Post();
        $post->title=$request->title;
        $post->body=$request->body;
        $post->save();
        return redirect()->route('post.getallpost')->with('post_created','post has been created successfully');
    }

    //add comment
    public function addComment($id){
        $post=Post::find($id);
        $comment= new Comment();
        $comment->comment='this is a comment2'; 
        $post->comments()->save($comment);
        return redirect()->route('post.getallpost')->with('comment_created','comment has been created successfully');
    }

    //get comment post by id
    public function getCommentByPost($id){
        $comment=Post::find($id)->comments;
        return $comment;
    }

    public function getPostById($id){
        //using normalq
        // $post=DB::table('posts')->where('id',$id)->first();

        //using eloq
        $post=Post::where('id',$id)->first();
        return view('single-post',compact('post'));
    }
    public function deletePost($id){
        //using normalq
        // DB::table('posts')->where('id',$id)->delete();

        // using eloq
        Post::where('id',$id)->delete();
        return back()->with('post_deleted','post has been deleted successfully');
    }
    public function editPost($id){
        //normal
        // $post=DB::table('posts')->where('id',$id)->first();

        //eloq
        $post=Post::find($id);

        return view('edit-post',compact('post'));
    }
    public function updatePost(Request $request){
        //normal
        // DB::table('posts')->where('id',$request->id)->update([
        //     'title'=>$request->title,
        //     'body'=>$request->body
        // ]);
        
        //eloq
        $post=Post::find($request->id);
        $post->title=$request->title;
        $post->body=$request->body;
        $post->save();
            
        
        return back()->with('post_updated','post has been updated successfully');
    }

    public function innerJoinClause(){
        $request=DB::table('users')
        ->join('posts','users.id','=','posts.user_id')
        ->select('users.name','posts.title','posts.body')
        ->get();
        return $request;
    }
    public function leftJoinClause(){
        $result=DB::table('users')
        ->leftjoin('posts','users.id','=','posts.user_id')
        // ->select('users.name','posts.title','posts.body')
        ->get();
        return $result;
    }
    public function rightJoinClause(){
        $result=DB::table('users')
        ->rightjoin('posts','users.id','=','posts.user_id')
        // ->select('users.name','posts.title','posts.body')
        ->get();
        return $result;
    }

public  function getAllPostsUsingModel(){
    $posts=Post::all();
    return $posts;
}

}
