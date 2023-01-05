 @extends('admin.master')
 @section('title')
     Post Page
 @endsection
 @section('body')
     <div id="layoutSidenav_content">
         <main>
             <div class="container-fluid px-4">
                 <h1 class="mt-4">POST</h1>
                 <ol class="breadcrumb mb-4">
                     <li class="breadcrumb-item active">Post</li>
                 </ol>
                 <div class="row">
                     <div class="col-md-12 mx-auto">
                         <div class="card">
                             <div class="card-title">
                                 <h2>Post Information</h2>
                                 @if(Session::get('message')) <p class="text-success text-center">{{ Session::get('message') }}</p> @endif
                             </div>
                             <div class="card-body">
                                 <form action="{{ route('post.create') }}" method="post" enctype="multipart/form-data">
                                     @csrf
                                     <div class="row mb-3">
                                         <label for="category_name" class="col-md-3">Category id:</label>
                                         <div class="col-md-9">
                                             <div class="col-md-9">
                                                 <select class="form-control" name="category_id" id="category_name">
                                                     <option>Select Category</option>
                                                     @foreach($categories as $category)
                                                     <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                     @endforeach
                                                 </select>
                                             </div>
                                         </div>
                                     </div>
                                     <div class="row mb-3">
                                         <label for="brand_name" class="col-md-3">Brand Name:</label>
                                         <div class="col-md-9">
                                             <input type="text" name="brand_name" id="brand_name" class="form-control" placeholder="Enter Brand name" />
                                         </div>
                                     </div>
                                     <div class="row mb-3">
                                         <label for="product_name" class="col-md-3">Product Name:</label>
                                         <div class="col-md-9">
                                             <input type="text" name="product_name" id="product_name" class="form-control" placeholder="Enter Product name" />
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
                                             <input type="submit"  class="btn btn-primary"  value="Post Submit" />
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
