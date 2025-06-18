@extends('layouts.adminmaster')

@section('content')  
<div class="row mb-4">
    <div class="col-lg-6">
        <h2>Add New Product</h2>
    </div>
    <div class="col-lg-6 text-end">
        <a class="btn btn-primary" href="{{ route('products.index') }}">Back</a>
    </div>
</div>

@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.
        <ul class="mb-0 mt-2">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<section class="section">
    <div class="card">
        <div class="card-body">
            <form id="productForm" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">

                <div class="row">
                    <!-- Name -->
                    <div class="col-md-12 mb-3">
                        <input type="text" name="name" id="name" class="form-control" placeholder="Product Name">
                    </div>

                    <!-- Price -->
                    <div class="col-md-12 mb-3">
                        <input type="number" name="price" id="price" class="form-control" placeholder="Price">
                    </div>

                    <!-- Detail -->
                    <div class="col-md-12 mb-3">
                        <textarea name="detail" class="form-control" rows="5" placeholder="Product Details"></textarea>
                    </div>

                    <div class="col-md-12 mb-4">
                        <input type="file" name="image_name[]" id="images" class="form-control" multiple>
                        <div id="image-preview" class="mt-3 d-flex flex-wrap gap-3"></div>
                    </div>
                    <!-- Submit Button -->
                    <div class="col-md-12 text-center">
                        <button type="submit" class="btn btn-primary" id="product-save">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>

@include('admin.js.product-create')
@endsection
