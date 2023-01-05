<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
class CategoryController extends Controller
{
    private $categories;
    private $category;
    public function index()
    {
        return view('admin.category.index');
    }
    public function create(Request $request)
    {
        Category::newCategory($request);
        return redirect()->back()->with('message','Category has been created successfully!');
    }
    public function manage()
    {
        $this->categories = Category::all();
        return view('admin.category.manage',['categories'=> $this->categories]);
    }
    public function edit($id)
    {
        $this->category = Category::find($id);
        return view('admin.category.edit',['category'=>$this->category]);
    }
    public function update(Request $request,$id)
    {
        Category::updateCategory($request,$id);
        return redirect('/manage-category')->with('message','Category category successfully!');
    }
    public function delete($id)
    {
        Category::deleteCategory($id);
        return redirect()->back()->with('message','Category has been delete successfully!');

    }
    public function updateStatus($id)
    {
        Category::updateStatus($id);
        return redirect()->back()->with('message','Category status updated successfully!');
    }

}
