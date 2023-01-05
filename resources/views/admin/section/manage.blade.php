@extends('admin.master')
@section('title')
    Manage Post Section
@endsection
@section('body')
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">Manage Post Section</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Manage post</li>
                </ol>
                <div class="row">
                    <div class="col-md-12 mx-auto">
                        <div class="card">
                            <div class="card-title">Manage Posts Section</div>
                            <div class="card-body">
                                <table class="table table-bordered dt-responsive nowrap">
                                    <thead>
                                    <tr>
                                        <th>1</th>
                                        <th>Title</th>
                                        <th> Create</th>
{{--                                        <th> Date</th>--}}
                                        <th>Short Description</th>
                                        <th>Long Description</th>
                                        <th>Image</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($sections as $section)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$section->title}}</td>
                                            <td>{{$section->create}}</td>
                                            <td>{{$section->short_description}}</td>
                                            <td>{{$section->long_description}}</td>
                                            <td><img src="{{ asset($section->image) }}" width="60px" height="50px" alt=""></td>
                                            <td>
                                                @if($section->status==1)
                                                    active
                                                @else
                                                    inactive
                                                @endif
                                            </td>
                                            <td>
                                                   <span class="btn-group">
                                                       @if($section->status==1)
                                                           <a href="{{ route('section.status',['id'=>$section->id]) }}" class="btn btn-sm btn-primary"><i class="fa fa-arrow-up"></i></a>
                                                       @else
                                                           <a href="{{ route('section.status',['id'=>$section->id]) }}" class="btn btn-sm btn-warning"><i class="fa fa-arrow-down"></i></a>
                                                       @endif
                                                            <a href="{{ route('section.edit',['id'=>$section->id]) }}" class="btn btn-success btn-sm">
                                                                <i class="fa fa-edit"></i>
                                                            </a>
                                                           <a href=" " class="btn btn-danger btn-sm" onclick="return confirm('Confirmation  delete this..')">
                                                                     <i class="fa fa-trash"></i>
{{--                                                               {{ route('post.delete',['id'=>$post->id]) }}--}}
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


