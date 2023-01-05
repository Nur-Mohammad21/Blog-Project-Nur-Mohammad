@extends('admin.master')
@section('title')
    Portfolio Page
@endsection
@section('body')
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">Portfolio Page</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Portfolio Page</li>
                </ol>
                <div class="row">
                    <div class="col-md-10 mx-auto">
                        <div class="card">
                            <div class="card-title">
                                <h2> Portfolio Page</h2>
                                @if(Session::get('message')) <p class="text-success text-center">{{ Session::get('message') }}</p> @endif
                            </div>
                            <div class="card-body">
                                <form action="{{ route('portfolio.update',['id'=>$portfolio->id]) }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row mb-3">
                                        <label for="slider_title" class="col-md-3">Portfolio Title:</label>
                                        <div class="col-md-9">
                                            <input type="text" name="title" value="{{ $portfolio->title }}" id="slider_title" class="form-control" placeholder="Enter Portfolio Title" />
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="name" class="col-md-3">Portfolio Name:</label>
                                        <div class="col-md-9">
                                            <input type="text" name="name" value="{{ $portfolio->name }}" id="name" class="form-control" placeholder="Enter Portfolio Name" />
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="short_description" class="col-md-3">Short Description:</label>
                                        <div class="col-md-9">
                                            <textarea type="text" name="short_description" id="short_description" class="form-control" placeholder=" Portfolio Short Description">{{ $portfolio->short_description }}</textarea>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="long_description" class="col-md-3">Long Description:</label>
                                        <div class="col-md-9">
                                            <textarea type="text" name="long_description" id="long_description" class="form-control" placeholder=" Portfolio Long Description">{{ $portfolio->long_description }}</textarea>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label class="col-md-3">Slider Image:</label>
                                        <div class="col-md-9">
                                            <input type="file" name="image"  class="form-control" placeholder="Upload Image" height="300px" width="600px" />
                                            <div class="mt-3">
                                                <img src="{{ assert($portfolio->image) }}" height="60px" width="50px">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-md-3"></label>
                                        <div class="col-md-9">
                                            <input type="submit"  class="btn btn-primary"  value="Update Portfolio" />
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


