<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Member;
use App\Models\Post;
use App\Models\Section;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    private $mySlider;
    private $mysection;
    private $mycategories;
    private $myPost, $userCheck;

    public function index()
    {
        $this->mySlider = Slider::where('status',1)->get();
        $this->mysection = Section::where('status',1)->get();
        $this->mycategories = Category::where('status',1)->get();
        $this->myPost = Post::where('status',1)->get();
        //return $this->myPost;
        //return $this->mysection;
        //return $this->mycategories;
        return view('front.home.index',['mySlider'=>$this->mySlider,'mysection'=>$this->mysection,'mycategories'=>$this->mycategories,
            'myPost'=>$this->myPost]);
    }
    public function detail($id)
    {
        $this->mysection = Section::where(['status'=>1,'id'=>$id])->first();
        // return $this->mysection;
        // section stay down slider
        return view('front.detail.index',['mysection'=>$this->mysection]);
    }
    public function login()
    {
        return view('front.login.index');
    }
    public function loginCheck(Request $request)
    {
        $request->validate([
           'email' => 'required|email',
            'password' =>'required'
        ]);
        $this->userCheck = Member::where('email',$request->email)->first();
        if($this->userCheck)
        {
            //$this->userCheck = Member::where('email',$request->email)->first();
            if(password_verify($request->password,$this->userCheck->password))
            {
                if(Auth::guard('member')->attempt(['email'=>$request->email,'password'=>$request->password]))
                {
                    return redirect()->intended('/');
                }

            }
            else
            {
                return redirect()->back()->with('message','Password does not match.');
            }
        }
        else
        {
            return redirect()->back()->with('message','Member not found');
        }
    }
    public function logout()
    {
        Auth::guard('member')->logout();
        return redirect()->back();
    }

    public function contact()
    {
        return view('front.contact.index');
    }
    public function registerMember(Request $request)
    {
        Member::newMember($request);
        return redirect()->back()->with('message','User registered successfully.');
    }

}
