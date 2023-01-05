 @extends('admin.master')
 @section('title')
     Add Category
 @endsection
 @section('body')
     <div id="layoutSidenav_content">
         <main>
             <div class="container-fluid px-4">
                 <h1 class="mt-4">Dashboard</h1>
                 <ol class="breadcrumb mb-4">
                     <li class="breadcrumb-item active">Dashboard</li>
                 </ol>
                 <div class="row">
                     <div class="col-md-8 mx-auto">
                         <div class="card">
                             <div class="card-title">
                                 <h2>Add New Category</h2>
                                 @if(Session::get('message')) <p class="text-success">{{ Session::get('message') }}</p> @endif
                             </div>
                             <div class="card-body">
                                 <form action="{{ route('category.create') }}" method="post" enctype="multipart/form-data">
                                     @csrf
                                     <div class="row mb-3">
                                         <label for="category_name" class="col-md-3">Category Name:</label>
                                         <div class="col-md-9">
                                             <input type="text" name="name" id="category_name" class="form-control" placeholder="Enter Category name" />
                                         </div>
                                     </div>
                                     <div class="row mb-3">
                                         <label for="description" class="col-md-3">Description</label>
                                         <div class="col-md-9">
                                            <textarea type="text" id="description" name="description" class="form-control" placeholder="Enter description"></textarea>
                                         </div>
                                     </div>
                                     <div class="row mb-3">
                                         <label class="col-md-3"></label>
                                         <div class="col-md-9">
                                             <input type="submit" value="Add Category" class="btn btn-primary" />
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
