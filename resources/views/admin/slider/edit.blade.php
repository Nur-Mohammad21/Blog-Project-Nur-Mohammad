@extends('admin.master')
@section('title')
    Slider Edit Page
@endsection
@section('body')
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">Slider Edit</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Slider Edit</li>
                </ol>
                <div class="row">
                    <div class="col-md-10 mx-auto">
                        <div class="card">
                            <div class="card-title">
                                <h2>Slider Edit page</h2>
                                @if(Session::get('message')) <p class="text-success text-center">{{ Session::get('message') }}</p> @endif
                            </div>
                            <div class="card-body">
                                <form action="{{ route('slider.update',['id'=>$slider->id]) }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row mb-3">
                                        <label for="slider_title" class="col-md-3">Slider Title:</label>
                                        <div class="col-md-9">
                                            <input type="text" name="title" value="{{ $slider->title }}" id="slider_title" class="form-control" placeholder="Enter Slider Title" />
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="description" class="col-md-3">Slider Description:</label>
                                        <div class="col-md-9">
                                            <input type="text" name="description" value="{{ $slider->description }}" id="description" class="form-control" placeholder="Enter Slider Title" />
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="slider_url" class="col-md-3">Slider Url:</label>
                                        <div class="col-md-9">
                                            <input type="text" name="url" value="{{ $slider->url }}" id="slider_url" class="form-control" placeholder="Enter Slider Url" />
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label class="col-md-3">Slider Image:</label>
                                        <div class="col-md-9">
                                            <input type="file" name="image"  class="form-control" placeholder="Upload Image"  />
                                            <div class="mt-2">
                                                <img src="{{ asset($slider->image) }}" alt="Image" width="70px" height="60px">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-md-3"></label>
                                        <div class="col-md-9">
                                            <input type="submit"  class="btn btn-primary"  value="Slider Update" />
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
