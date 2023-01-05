@extends('admin.master')
@section('title')
    Admin | Member
@endsection
@section('body')
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">Member Page</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Member Page</li>
                </ol>
                <div class="row">
                    <div class="col-md-10 mx-auto">
                        <div class="card">
                            <div class="card-title">
                                <h2>Member Page</h2>
                                @if(Session::get('message')) <p class="text-success text-center">{{ Session::get('message') }}</p> @endif
                            </div>
                            <div class="card-body">
                                <form action="{{ route('member.create') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row mb-3">
                                        <label for="name" class="col-md-3"> Name:</label>
                                        <div class="col-md-9">
                                            <input type="text" name="name" id="name" class="form-control" placeholder="Enter Your Name" />
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="email" class="col-md-3"> Email:</label>
                                        <div class="col-md-9">
                                            <input type="email" name="email" id="email" class="form-control" placeholder="Enter Your Email" />
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="password" class="col-md-3"> password:</label>
                                        <div class="col-md-9">
                                            <input type="text" name="password" id="password" class="form-control" placeholder="Enter Your Password" />
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="phone" class="col-md-3"> Phone:</label>
                                        <div class="col-md-9">
                                             <input type="number" name="phone" class="form-control" id="phone" placeholder="Enter your Mobile Number">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="address" class="col-md-3">Address Description</label>
                                        <div class="col-md-9">
                                            <textarea type="text" id="address" name="address" class="form-control" placeholder="Enter Address"></textarea>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-md-3">Image</label>
                                        <div class="col-md-9">
                                            <input type="file" name="image"  class="form-control" placeholder="Upload Image" height="300px" width="600px" />
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-md-3"></label>
                                        <div class="col-md-9">
                                            <input type="submit"  class="btn btn-primary"  value=" Create Member" />
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
@endsection

