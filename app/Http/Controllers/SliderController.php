<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    private $sliders;
    private $slider;

    public function index()
    {
        return view('admin.slider.index');
    }
    public function create(Request $request)
    {
        Slider::newSlider($request);
        return redirect()->back()->with('message','Slider has been saved successfully!');
    }
    public function manage()
    {
        $this->sliders = Slider::latest()->get();
        return view('admin.slider.manage',['sliders'=>$this->sliders]);
    }
    public function edit($id)
    {
        $this->slider = Slider::find($id);
        return view('admin.slider.edit',['slider'=>$this->slider]);
    }
    public function update(Request $request, $id)
    {
        Slider::updateSlider($request,$id);
        return redirect('/manage-slider')->with('message',' Slider update successfully!');
    }
    public function delete($id)
    {
        Slider::deleteSlider($id);
        return redirect()->back()->with('message','Slide has been delete successfully!');
    }
    public function updateStatus($id)
    {
        Slider::statusSlider($id);
        return redirect()->back()->with('message','Slider status updated successfully!');
    }
}
