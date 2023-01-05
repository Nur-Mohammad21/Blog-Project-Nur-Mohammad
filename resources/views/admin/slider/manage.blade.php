@extends('admin.master')
@section('title')
    Manage Slider
@endsection
@section('body')
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">Manage Slider</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Slider</li>
                </ol>
                <div class="row">
                    <div class="col-md-10 mx-auto">
                        <div class="card">
                            <div class="card-title">Manage Slider information</div>
                            <div class="card-body">
                                <table class="table table-bordered dt-responsive nowrap"">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Title</th>
                                            <th>Description</th>
                                            <th>Url</th>
                                            <th>Image</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                    @foreach($sliders as $slider)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{ $slider->title }}</td>
                                            <td>{{ $slider->description }}</td>
                                            <td>{{ $slider->url }}</td>
                                            <td>  <img src="{{ asset($slider->image) }}" width="60px" height="50px" alt=""></td>
                                            <td>
                                                @if($slider->status==1)
                                                    active
                                                @else
                                                    inactive
                                                @endif
                                            </td>
                                            <td>
                                                    <span class="btn-group">
                                                          @if($slider->status==1)
                                                            <a href="{{ route('slider.status',['id'=>$slider->id]) }} " class="btn btn-sm btn-primary"><i class="fa fa-arrow-up"></i></a>
                                                        @else
                                                            <a href=" {{ route('slider.status',['id'=>$slider->id]) }}" class="btn btn-sm btn-warning"><i class="fa fa-arrow-down"></i></a>
                                                        @endif
                                                    <a href=" {{ route('slider.edit',['id'=>$slider->id]) }} " class="btn btn-success btn-sm">
                                                        <i class="fa fa-edit"></i>
                                                    </a>
                                                    <a href=" {{ route('slider.delete',['id'=>$slider->id]) }}" class="btn btn-danger btn-sm" onclick="return confirm('Confrom  delete this..')">
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
            </div>
        </main>
    </div>
@endsection
