@extends('admin.master')
@section('title')
    Manage Category
@endsection
@section('body')
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">Manage</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
                <div class="row">
                    <div class="col-md-8 mx-auto">
                        <div class="card">
                            <div class="card-title">Manage Categories info</div>
                            <div class="card-body">
                                <table class="table table-bordered dt-responsive nowrap"">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Description</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach($categories as $category)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{ $category->name }}</td>
                                            <td>{{ $category->description }}</td>
                                            <td>
                                                @if($category->status==1)
                                                active
                                                @else
                                                inactive
                                                @endif
                                            </td>
                                            <td>
                                                <span class="btn-group">
                                                      @if($category->status==1)
                                                        <a href="{{ route('category.status',['id'=>$category->id]) }}" class="btn btn-sm btn-primary"><i class="fa fa-arrow-up"></i></a>
                                                    @else
                                                        <a href="{{ route('category.status',['id'=>$category->id]) }}" class="btn btn-sm btn-warning"><i class="fa fa-arrow-down"></i></a>
                                                    @endif
                                                <a href="{{ route('category.edit',['id'=>$category->id]) }} " class="btn btn-success btn-sm">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <a href="{{ route('category.delete',['id'=>$category->id]) }}" class="btn btn-danger btn-sm" onclick="return confirm('Confrom  delete this..')">
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
