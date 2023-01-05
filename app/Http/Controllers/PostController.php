<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    private $categories;
    private $posts;
    private $post;
    public function index()
    {
        $this->categories = Category::latest()->get();
        return view('admin.post.index',['categories'=>$this->categories]);
    }
    public function create(Request $request)
    {
        Post::newPost($request);
        return redirect()->back()->with('message','Post has been saves successfully!');
    }
    public function manage()
    {
        $this->posts = Post::latest()->get();
        return view('admin.post.manage',['posts'=>$this->posts]);
    }
    public function edit($id)
    {
        $this->categories = Category::latest()->get();
        $this->post = Post::find($id);
        return view('admin.post.edit',['post'=>$this->post,'categories'=>$this->categories]);
    }
    public function update( Request $request,$id)
    {
        Post::updatePost($request,$id);
        return redirect('/manage-post')->with('message',' Post update successfully!');
    }
    public function delete($id)
    {
        Post::deletePost($id);
        return redirect()->back()->with('message','Post has been delete successfully!');
    }
    public function updateStatus($id)
    {
        Post::statusPost($id);
        return redirect()->back()->with('message','Post status updated successfully!');

    }

}
