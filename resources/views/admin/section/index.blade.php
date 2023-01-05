@extends('admin.master')
@section('title')
     Section post Page
@endsection
@section('body')
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4"> Section Post Page</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Post Section Page</li>
                </ol>
                <div class="row">
                    <div class="col-md-8 mx-auto">
                        <div class="card">
                            <div class="card-title">
                                <h2> Section Post Page</h2>
                                @if(Session::get('message')) <p class="text-success text-center">{{ Session::get('message') }}</p> @endif
                            </div>
                            <div class="card-body">
                                <form action="{{ route('section.create') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row mb-3">
                                        <label for="title" class="col-md-3"> Title:</label>
                                        <div class="col-md-9">
                                            <input type="text" name="title" id="title" class="form-control" placeholder="Enter Your Title" />
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="create" class="col-md-3">Create:</label>
                                        <div class="col-md-9">
                                            <input type="text" name="create" id="create" class="form-control" placeholder="Enter Product name" />
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="short_description" class="col-md-3">Short Description</label>
                                        <div class="col-md-9">
                                            <textarea type="text" id="short_description" name="short_description" class="form-control" placeholder="Enter Short description"></textarea>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="long_description" class="col-md-3">Long Description</label>
                                        <div class="col-md-9">
                                            <textarea type="text" id="long_description" name="long_description" class="form-control" placeholder="Enter Long description"></textarea>
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
                                            <input type="submit"  class="btn btn-primary"  value=" Post Section Submit" />
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
