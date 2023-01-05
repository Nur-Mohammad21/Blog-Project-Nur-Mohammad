<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    private $members;
    private $member;
    public function index()
    {
        return view('admin.member.index');
    }
    public function create(Request $request)
    {
        Member::newMember($request);
        return redirect()->back()->with('message','Member has been saves successfully!');
    }
    public function manage()
    {
        $this->members = Member::latest()->get();
        return view('admin.member.manage',['members'=>$this->members]);
    }
    public function edit($id)
    {
        $this->member = Member::find($id);
        return view('admin.member.edit',['member'=>$this->member]);
    }
    public function update(Request $request)
    {

        Member::updateMember($request);
        return redirect()->back()->with('message','Member has been Updated successfully!');
    }
    public function delete($id)
    {
        Member::deleteMember($id);
        return redirect()->back()->with('message','Member delete successfully!');
    }

}
