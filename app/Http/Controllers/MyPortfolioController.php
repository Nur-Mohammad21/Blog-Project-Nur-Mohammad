<?php

namespace App\Http\Controllers;

use App\Models\MyPortfolio;
use Illuminate\Http\Request;

class MyPortfolioController extends Controller
{
    private $portfolios;
    private $portfolio;
    public function index()
    {
        return view('admin.portfolio.index');
    }

    public function create(Request $request)
    {
        $this->validate($request,
            [
                'title'             => 'required',
                'name'            => 'required',
                'short_description'  => 'required',
                'long_description'   => 'required',
                'image'              => 'mimes:jpeg,jpg,png,gif|image|max:20000',

            ]
        );
        MyPortfolio::newPortfolio($request);
        return redirect()->back()->with('message','Portfolio has been saves successfully!');
    }
    public function manage()
    {
        $this->portfolios = MyPortfolio::latest()->get();
        return view('admin.portfolio.manage',['portfolios'=>$this->portfolios]);
    }
    public function edit($id)
    {
        $this->portfolio = MyPortfolio::find($id);
        return view('admin.portfolio.edit',['portfolio'=>$this->portfolio]);
    }
    public function update(Request $request,$id)
    {
        MyPortfolio::updatePortfolio($request,$id);
        return redirect('/manage-portfolio')->with('message',' portfolio update successfully!');
    }
    public function delete($id)
    {
       MyPortfolio::deletePortfolio($id);
        return redirect()->back()->with('message','Portfolio delete successfully!');
    }
}
