@extends('admin.master')
@section('title')
    Admin | Portfolio Manage
@endsection
@section('body')
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">Portfolio Manage</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Portfolio Manage</li>
                </ol>
                <div class="row">
                    <div class="col-md-12 mx-auto">
                        <div class="card">
                            <div class="card-title"> Portfolio Manage Info</div>
                            <div class="card-body">
                                <table class="table table-bordered dt-responsive nowrap">
                                    <thead>
                                    <tr>
                                        <th>1</th>
                                        <th>Title</th>
                                        <th> Name</th>
                                        <th>Short Description</th>
                                        <th>Long Description</th>
                                        <th>Image</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($portfolios as $portfolio)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$portfolio->title}}</td>
                                            <td>{{$portfolio->name}}</td>
                                            <td>{{$portfolio->short_description}}</td>
                                            <td>{{$portfolio->long_description}}</td>
                                            <td><img src="{{ asset($portfolio->image) }}" width="60px" height="50px" alt=""></td>
                                            <td>
                                                   <span class="btn-group">
                                                            <a href=" {{ route('portfolio.edit',['id'=>$portfolio->id]) }} " class="btn btn-success btn-sm">
                                                                <i class="fa fa-edit"></i>
                                                            </a>
                                                           <a href=" {{ route('portfolio.delete',['id'=>$portfolio->id]) }}" class="btn btn-danger btn-sm" onclick="return confirm('Confirmation  delete this..')">
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



