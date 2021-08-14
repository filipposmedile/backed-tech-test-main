<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Blog;
use App\Models\Comment;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
| Please make BLOG & COMMENT CRUD ROUTES
*/
Route::get('blogs',function(){

    $blogs = Blog::all();

    return response()->json([
        'blogs' => $blogs
    ]);
});
Route::get('blogs/{id}',function($id){

    $blog = Blog::findOrFail($id);

    $comments = $blog->comments;

    return response()->json([
        'blog' => $blog,
        'comments'=>$comments
    ]);
});
Route::get('blogs/{id}/comment/{title}/{name}/{email}/{content}/post',function($id,$title,$name,$email,$content){
    
    $comment = new Comment;

    $comment->title = $title;

    $comment->name = $name;

    $comment->email = $email;

    $comment->comment = $content;

    $comment->blog_id = $id;

    $comment->save();

        return 'Comment saved.<br><br>'.response()->json([
            'blog' => $comment
        ]);
});
Route::get('blogs/comment/{id}/{title}/{name}/{email}/{content}/edit',function($id,$title,$name,$email,$content){
    
    $comment = Comment::findOrFail($id);

    $comment->title = $title;

    $comment->name = $name;

    $comment->email = $email;

    $comment->comment = $content;

    $comment->save();

        return 'Comment saved.<br><br>'.response()->json([
            'blog' => $comment
        ]);
});
Route::get('blogs/comment/{id}/delete',function($id){
    
    $comment = Comment::findOrFail($id);

    $title = $comment->title;

    $name = $comment->name;

    $comment->delete();

        return 'Comment '.$title.'. '.$name.' deleted';
});