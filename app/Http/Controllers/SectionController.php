<?php

namespace App\Http\Controllers;

use App\Models\Section;
use Illuminate\Http\Request;

class SectionController extends Controller
{
    private $sections;
    private $section;
    public function index()
    {
        return view('admin.section.index');
    }
    public function validation($request)
    {

        $this->validate($request,
            [
                'title'             => 'required',
                'create'            => 'required',
                'email'             => 'required|email|unique:members',
                'phone'             => 'required|digits:11',
                'password'           => 'required',
                'short_description'  => 'required',
                'long_description'   => 'required',
                'image'              => 'mimes:jpeg,jpg,png,gif|image|max:20000',

            ],
            [
                'name.required'                    => 'Name field is required.',
                'create.required'                  => 'create field is required.',
                'name.regex'                       => 'Valid Name field is required.',
                'email.required'                   => 'The email field is required.',
                'email.email'                      => 'Valid email is required.',
                'email.unique'                     => 'Email must be unique.',
                'phone.required'                   => 'Phone number is required.',
                'short_description.required'       => 'Short Description number is required.',
                'long_description.required'        => 'Long Description number is required.',
                'password.required'                => 'The Password is required.',
                'image.mimes'                      => 'Please select valid image file.',
                'image.image'                      => 'Please select image file.',
                'image.max'                        => 'Maximum file size is 3mb.',
            ]
        );
    }
    public function create(Request $request)
    {
        $this->validation($request);
        Section::newSection($request);
        return redirect()->back()->with('message','Section has been saves successfully!');
    }
    public function manage()
    {
        $this->sections = Section::latest()->get();
        return view('admin.section.manage',['sections'=>$this->sections ]);
    }
    public function edit($id)
    {
        $this->section = Section::find($id);
        return view('admin.section.edit',['section'=>$this->section]);
    }
    public function update(Request $request, $id)
    {
        Section::updateSection($request, $id);
        return redirect('/manage-section')->with('message','Category category successfully!');
    }
    public function updateStatus($id)
    {
        Section::statusSection($id);
        return redirect()->back()->with('message','Section status updated successfully!');
    }

}
