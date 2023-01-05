@extends('admin.master')
@section('title')
    Admin |Member
@endsection
@section('body')
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">Member</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Member Manage</li>
                </ol>
                <div class="row">
                    <div class="col-md-12 mx-auto">
                        <div class="card">
                            <div class="card-title"> Members Information</div>
                            <div class="card-body">
                                <table class="table table-bordered dt-responsive nowrap">
                                    <thead>
                                    <tr>
                                        <th>1</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Password</th>
                                        <th>Phone</th>
                                        <th> Address</th>
                                        <th>Image</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($members as $member)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$member->name}}</td>
                                            <td>{{$member->email}}</td>
                                            <td>{{$member->password}}</td>
                                            <td>{{$member->phone}}</td>
                                            <td>{{$member->address}}</td>
                                            <td><img src="{{ asset($member->image) }}" width="60px" height="50px" alt=""></td>
                                            <td>
                                                   <span class="btn-group">
                                                            <a href=" {{ route('member.edit',['id'=>$member->id]) }} " class="btn btn-success btn-sm">
                                                                <i class="fa fa-edit"></i>
                                                            </a>
                                                           <a href=" {{ route('member.delete',['id'=>$member->id]) }}" class="btn btn-danger btn-sm" onclick="return confirm('Confirmation  delete this..')">
                                                                     <i class="fa fa-trash"></i>
                                                           </a>
                                                   </span>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
        </main>
    </div>
@endsection


